<?php
namespace garethp\ews\API;

use garethp\ews\API;
use garethp\ews\API\Exception\AutoDiscoverFailed;
use garethp\ews\HttpPlayback\HttpPlayback;
use XMLWriter;

/**
 * Contains EWSAutodiscover.
 */

/**
 * Exchange Web Services Autodiscover implementation
 *
 * This class supports POX (Plain Old XML), which is deprecated but functional
 * in Exchange 2010. It may make sense for you to combine your Autodiscovery
 * efforts with a SOAP Autodiscover request as well.
 *
 * USAGE:
 *
 * (after any auto-loading class incantation)
 *
 * $ews = EWSAutodiscover::getEWS($email, $password);
 *
 * -- OR --
 *
 * If there are issues with your cURL installation that require you to specify
 * a path to a valid Certificate Authority, you can configure that manually.
 *
 * $auto = new EWSAutodiscover($email, $password);
 * $auto->setCAInfo('/path/to/your/cacert.pem');
 * $ews = $auto->newEWS();
 *
 * @link http://technet.microsoft.com/en-us/library/bb332063(EXCHG.80).aspx
 * @link https://www.testexchangeconnectivity.com/
 *
 * @package php-ews\AutoDiscovery
 */
class EWSAutodiscover
{
    /**
     * The path appended to the various schemes and hostnames used during
     * autodiscovery.
     *
     * @var string
     */
    const AUTODISCOVER_PATH = '/autodiscover/autodiscover.xml';

    /**
     * The Autodiscover XML request. Since it's used repeatedly, it's cached
     * in this property to avoid redundant re-generation.
     *
     * @var string
     */
    protected $requestXML;

    /**
     * The Certificate Authority path. Should point to a directory containing
     * one or more certificates to use in SSL verification.
     *
     * @var string
     */
    protected $certificateAuthorityPath;

    /**
     * The path to a specific Certificate Authority file. Get one and use it
     * for full Autodiscovery compliance.
     *
     * @var string
     *
     * @link http://curl.haxx.se/ca/cacert.pem
     * @link http://curl.haxx.se/ca/
     */
    protected $certificateAuthorityInfo;

    /**
     * @var HttpPlayback
     */
    protected $httpPlayback;

    /**
     * An associative array of response headers that resulted from the
     * last request. Keys are lowercased for easy checking.
     *
     * @var array
     */
    public $last_response_headers;

    /**
     * The result of the most recent curl_exec.
     *
     * @var mixed
     */
    public $last_response;

    /**
     * The output of curl_info() relating to the most recent cURL request.
     *
     * @var mixed
     */
    public $last_info;

    /**
     * The cURL error code associated with the most recent cURL request.
     *
     * @var integer
     */
    public $last_curl_errno;

    /**
     * Human-readable description of the most recent cURL error.
     *
     * @var string
     */
    public $last_curl_error;

    /**
     * Information about an Autodiscover Response containing an error will
     * be stored here.
     *
     * @var mixed
     */
    public $error = false;

    /**
     * Information about an Autodiscover Response with a redirect will be
     * retained here.
     *
     * @var mixed
     */
    public $redirect = false;

    /**
     * A successful, non-error and non-redirect parsed Autodiscover response
     * will be stored here.
     *
     * @var mixed
     */
    public $discovered = null;

    protected function __construct()
    {
    }

    /**
     * Parse the hex ServerVersion value and return a valid
     * ExchangeWebServices::VERSION_* constant.
     *
     * @param $version_hex
     * @return string|boolean A known version constant, or FALSE if it could not
     * be determined.
     *
     * @link http://msdn.microsoft.com/en-us/library/bb204122(v=exchg.140).aspx
     * @link http://blogs.msdn.com/b/pcreehan/archive/2009/09/21/parsing-serverversion-when-an-int-is-really-5-ints.aspx
     */
    protected function parseServerVersion($version_hex)
    {
        $svbinary = base_convert($version_hex, 16, 2);
        if (strlen($svbinary) == 31) {
            $svbinary = '0' . $svbinary;
        }

        $majorversion = base_convert(substr($svbinary, 4, 6), 2, 10);
        $minorversion = base_convert(substr($svbinary, 10, 6), 2, 10);

        if ($majorversion == 8) {
            switch ($minorversion) {
                case 0:
                    return ExchangeWebServices::VERSION_2007;
                case 1:
                    return ExchangeWebServices::VERSION_2007_SP1;
                case 2:
                    return ExchangeWebServices::VERSION_2007_SP2;
                case 3:
                    return ExchangeWebServices::VERSION_2007_SP3;
                default:
                    return ExchangeWebServices::VERSION_2007;
            }
        } elseif ($majorversion == 14) {
            switch ($minorversion) {
                case 0:
                    return ExchangeWebServices::VERSION_2010;
                case 1:
                    return ExchangeWebServices::VERSION_2010_SP1;
                case 2:
                    return ExchangeWebServices::VERSION_2010_SP2;
                default:
                    return ExchangeWebServices::VERSION_2010;
            }
        }

        // Guess we didn't find a known version.
        return false;
    }

    protected function newAPI($email, $password, $username = null, $options = [])
    {
        $options = array_replace_recursive([
            'httpPlayback' => [
                'mode' => null
            ]
        ], $options);

        $this->httpPlayback = HttpPlayback::getInstance($options['httpPlayback']);

        if (!$username) {
            $username = $email;
        }

        $settings = $this->discover($email, $password, $username);
        if ($settings === false) {
            throw new AutoDiscoverFailed();
        }

        $server = false;
        $version = null;

        // Pick out the host from the EXPR (Exchange RPC over HTTP).
        foreach ($settings['Account']['Protocol'] as $protocol) {
            if (($protocol['Type'] == 'EXCH' || $protocol['Type'] == 'EXPR')
                && isset($protocol['ServerVersion'])
            ) {
                if ($version == null) {
                    $sv = $this->parseServerVersion($protocol['ServerVersion']);
                    if ($sv !== false) {
                        $version = $sv;
                    }
                }
            }

            if ($protocol['Type'] == 'EXPR' && isset($protocol['Server'])) {
                $server = $protocol['Server'];
            }
        }

        if ($server) {
            $options = [];
            if ($version !== null) {
                $options['version'] = $version;
            }

            return API::withUsernameAndPassword($server, $email, $password, $options);
        }

        return false;
    }

    /**
     * Static method may fail if there are issues surrounding SSL certificates.
     * In such cases, set up the object as needed, and then call newEWS().
     *
     * @param string $email
     * @param string $password
     * @param string $username If left blank, the email provided will be used.
     * @return mixed
     */
    public static function getAPI($email, $password, $username = null, $options = [])
    {
        $auto = new static();

        return $auto->newAPI($email, $password, $username, $options);
    }

    /**
     * Execute the full discovery chain of events in the correct sequence
     * until a valid response is received, or all methods have failed.
     *
     * @param string $email
     * @param string $password
     * @param string $username
     *
     * @return string The discovered settings
     */
    protected function discover($email, $password, $username)
    {
        $result = $this->tryTopLevelDomain($email, $password, $username);

        if ($result === false) {
            $result = $this->tryAutoDiscoverSubDomain($email, $password, $username);
        }

        if ($result === false) {
            $result = $this->trySubdomainUnauthenticatedGet($email, $password, $username);
        }

        if ($result === false) {
            $result = $this->trySRVRecord($email, $password, $username);
        }

        return $result;
    }

    /**
     * Perform an NTLM authenticated HTTPS POST to the top-level
     * domain of the email address.
     *
     * @param string $email
     * @param string $password
     * @param string $username
     *
     * @return string The discovered settings
     */
    protected function tryTopLevelDomain($email, $password, $username)
    {
        $topLevelDomain = $this->getTopLevelDomainFromEmail($email);
        $url = 'https://www.' . $topLevelDomain . self::AUTODISCOVER_PATH;

        return $this->doNTLMPost($url, $email, $password, $username);
    }

    /**
     * Perform an NTLM authenticated HTTPS POST to the 'autodiscover'
     * subdomain of the email address' TLD.
     *
     * @param string $email
     * @param string $password
     * @param string $username
     *
     * @return string The discovered settings
     */
    protected function tryAutoDiscoverSubDomain($email, $password, $username)
    {
        $topLevelDomain = $this->getTopLevelDomainFromEmail($email);
        $url = 'https://autodiscover.' . $topLevelDomain . self::AUTODISCOVER_PATH;

        return $this->doNTLMPost($url, $email, $password, $username);
    }

    /**
     * Perform an unauthenticated HTTP GET in an attempt to get redirected
     * via 302 to the correct location to perform the HTTPS POST.
     *
     * @param string $email
     * @param string $password
     * @param string $username
     *
     * @return string The discovered settings
     */
    protected function trySubdomainUnauthenticatedGet($email, $password, $username)
    {
        $topLevelDomain = $this->getTopLevelDomainFromEmail($email);

        $url = 'http://autodiscover.' . $topLevelDomain . self::AUTODISCOVER_PATH;

        $client = $this->httpPlayback->getHttpClient();
        $postOptions = [
            'timeout' => 2,
            'allow_redirects' => false,
            'headers' => [
                'Content-Type' => 'text/xml; charset=utf-8'
            ],
            'curl' => []
        ];

        try {
            $response = $client->get($url, $postOptions);

            if ($response->getStatusCode() == 301 || $response->getStatusCode() == 302) {
                return $this->doNTLMPost($response->getHeaderLine('Location'), $email, $password, $username);
            }
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Attempt to retrieve the autodiscover host from an SRV DNS record.
     *
     * @link http://support.microsoft.com/kb/940881
     *
     * @param string $email
     * @param string $password
     * @param string $username
     *
     * @return string The discovered settings
     */
    protected function trySRVRecord($email, $password, $username)
    {
        $topLevelDomain = $this->getTopLevelDomainFromEmail($email);
        $srvHost = '_autodiscover._tcp.' . $topLevelDomain;
        $lookup = dns_get_record($srvHost, DNS_SRV);
        if (sizeof($lookup) > 0) {
            $host = $lookup[0]['target'];
            $url = 'https://' . $host . self::AUTODISCOVER_PATH;

            return $this->doNTLMPost($url, $email, $password, $username);
        }

        return false;
    }

    /**
     * Set the path to the file to be used by CURLOPT_CAINFO.
     *
     * @param string $path Path to a certificate file such as cacert.pem
     * @return self
     */
    public function setCAInfo($path)
    {
        if (file_exists($path) && is_file($path)) {
            $this->certificateAuthorityInfo = $path;
        }

        return $this;
    }

    /**
     * Set the path to the file to be used by CURLOPT_CAPATH.
     *
     * @param string $path Path to a directory containing one or more CA
     * certificates.
     * @return self
     */
    public function setCertificateAuthorityPath($path)
    {
        if (is_dir($path)) {
            $this->certificateAuthorityPath = $path;
        }

        return $this;
    }

    /**
     * Perform the NTLM authenticated post against one of the chosen
     * endpoints.
     *
     * @param string $url URL to try posting to
     * @param string $email
     * @param string $password
     * @param string $username
     *
     * @return string The discovered settings
     */
    protected function doNTLMPost($url, $email, $password, $username)
    {
        $client = $this->httpPlayback->getHttpClient();
        $postOptions = [
            'body' => $this->getAutoDiscoverXML($email),
            'timeout' => 2,
            'allow_redirects' => true,
            'headers' => [
                'Content-Type' => 'text/xml; charset=utf-8'
            ],
            'curl' => []
        ];
        $auth = ExchangeWebServicesAuth::fromUsernameAndPassword($username, $password);
        $postOptions = array_replace_recursive($postOptions, $auth);

        if (!empty($this->certificateAuthorityInfo)) {
            $postOptions['cur'][CURLOPT_CAINFO] = $this->certificateAuthorityInfo;
        }

        if (!empty($this->certificateAuthorityPath)) {
            $postOptions['cur'][CURLOPT_CAPATH] = $this->certificateAuthorityPath;
        }

        try {
            $response = $client->post($url, $postOptions);
        } catch (\Exception $e) {
            return false;
        }

        return $this->parseAutodiscoverResponse($response->getBody()->__toString());
    }

    /**
     * Parse the Autoresponse Payload, particularly to determine if an
     * additional request is necessary.
     *
     * @param $response
     * @return array|bool
     * @throws AutoDiscoverFailed
     */
    protected function parseAutodiscoverResponse($response)
    {
        // Content-type isn't trustworthy, unfortunately. Shame on Microsoft.
        if (substr($response, 0, 5) !== '<?xml') {
            throw new AutoDiscoverFailed();
        }

        $response = $this->responseToArray($response);

        if (isset($response['Error'])) {
            $this->error = $response['Error'];

            return false;
        }

        // Check the account action for redirect.
        switch ($response['Account']['Action']) {
            case 'redirectUrl':
                $this->redirect = array(
                    'redirectUrl' => $response['Account']['redirectUrl']
                );

                return false;
            case 'redirectAddr':
                $this->redirect = array(
                    'redirectAddr' => $response['Account']['redirectAddr']
                );

                return false;
            case 'settings':
            default:
                return $response;
        }
    }

    /**
     * Get a top level domain based on an email address
     *
     * @param $email
     * @return bool|string
     */
    protected function getTopLevelDomainFromEmail($email)
    {
        $pos = strpos($email, '@');
        if ($pos !== false) {
            return trim(substr($email, $pos + 1));
        }

        return false;
    }

    /**
     * Return the generated Autodiscover XML request body.
     *
     * @param string $email
     * @return string
     */
    protected function getAutoDiscoverXML($email)
    {
        if (!empty($this->requestXML)) {
            return $this->requestXML;
        }

        $xml = new XMLWriter;
        $xml->openMemory();
        $xml->setIndent(true);
        $xml->startDocument('1.0', 'UTF-8');
        $xml->startElementNS(
            null,
            'Autodiscover',
            'http://schemas.microsoft.com/exchange/autodiscover/outlook/requestschema/2006'
        );

        $xml->startElement('Request');
        $xml->writeElement('EMailAddress', $email);
        $xml->writeElement(
            'AcceptableResponseSchema',
            'http://schemas.microsoft.com/exchange/autodiscover/outlook/responseschema/2006a'
        );
        $xml->endElement();
        $xml->endElement();

        $this->requestXML = $xml->outputMemory();

        return $this->requestXML;
    }

    /**
     * Utility function to parse XML payloads from the response into easier
     * to manage associative arrays.
     *
     * @param string $xml XML to parse
     * @return array
     */
    protected function responseToArray($xml)
    {
        $doc = new \DOMDocument();
        $doc->loadXML($xml);
        $out = $this->nodeToArray($doc->documentElement);

        return $out['Response'];
    }

    /**
     * Recursive method for parsing DOM nodes.
     *
     * @link https://github.com/gaarf/XML-string-to-PHP-array
     * @param object $node DOMNode object
     * @return mixed
     */
    protected function nodeToArray($node)
    {
        $output = array();
        switch ($node->nodeType) {
            case XML_CDATA_SECTION_NODE:
            case XML_TEXT_NODE:
                $output = trim($node->textContent);
                break;
            case XML_ELEMENT_NODE:
                for ($i = 0, $m = $node->childNodes->length; $i < $m; $i++) {
                    $child = $node->childNodes->item($i);
                    $v = $this->nodeToArray($child);
                    if (isset($child->tagName)) {
                        $t = $child->tagName;
                        if (!isset($output[$t])) {
                            $output[$t] = array();
                        }
                        $output[$t][] = $v;
                    } elseif ($v || $v === '0') {
                        $output = (string)$v;
                    }
                }

                // Edge case of a node containing a text node, which also has
                // attributes. this way we'll retain text and attributes for
                // this node.
                if (is_string($output) && $node->attributes->length) {
                    $output = array('@text' => $output);
                }

                if (is_array($output)) {
                    if ($node->attributes->length) {
                        $a = array();
                        foreach ($node->attributes as $attrName => $attrNode) {
                            $a[$attrName] = (string)$attrNode->value;
                        }
                        $output['@attributes'] = $a;
                    }
                    foreach ($output as $t => $v) {
                        if (is_array($v) && count($v) == 1 && $t != '@attributes') {
                            $output[$t] = $v[0];
                        }
                    }
                }
                break;
        }

        return $output;
    }
}
