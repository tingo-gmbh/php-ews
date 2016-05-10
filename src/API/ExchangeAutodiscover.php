<?php
namespace jamesiarmes\PEWS\API;

use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\Exception\AutodiscoverFailed;
use jamesiarmes\PEWS\HttpPlayback\HttpPlayback;

class ExchangeAutodiscover
{
    protected $autodiscoverPath = '/autodiscover/autodiscover.xml';

    /**
     * @var HttpPlayback
     */
    protected $httpPlayback;

    protected function __construct()
    {
    }

    /**
     * Parse the hex ServerVersion value and return a valid
     * ExchangeWebServices::VERSION_* constant.
     *
     * @param $versionHex
     * @return string|boolean A known version constant, or FALSE if it could not
     * be determined.
     *
     * @link http://msdn.microsoft.com/en-us/library/bb204122(v=exchg.140).aspx
     * @link http://blogs.msdn.com/b/pcreehan/archive/2009/09/21/parsing-serverversion-when-an-int-is-really-5-ints.aspx
     */
    protected function parseServerVersion($versionHex)
    {
        //Convert from hex to binary
        $versionBinary = base_convert($versionHex, 16, 2);
        $versionBinary = str_pad($versionBinary, 32, "0", STR_PAD_LEFT);

        //Get the relevant parts of the binary and convert them to base 10
        $majorVersion = base_convert(substr($versionBinary, 4, 6), 2, 10);
        $minorVersion = base_convert(substr($versionBinary, 10, 6), 2, 10);

        $versions = [
            8 => [
                'name' => 'VERSION_2007',
                'spCount' => 3
            ],
            14 => [
                'name' => 'VERSION_2010',
                'spCount' => 3
            ],
            15 => [
                'name' => 'VERSION_2013',
                'spCount' => 1
            ]
        ];

        if (!isset($versions[$majorVersion])) {
            return false;
        }

        $constant = $versions[$majorVersion]['name'];
        if ($minorVersion > 0 && $minorVersion <= $versions[$majorVersion]['spCount']) {
            $constant .= "_SP$minorVersion";
        }

        return constant(ExchangeWebServices::class."::$constant");
    }

    /**
     * @param string $email
     * @param string $password
     * @param string $username
     */
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
        if (!$settings) {
            throw new AutodiscoverFailed();
        }

        $server = $this->getServerFromResponse($settings);
        $version = $this->getServerVersionFromResponse($settings);

        if (!$server) {
            throw new AutodiscoverFailed();
        }

        $options = [];
        if ($version) {
            $options['version'] = $version;
        }

        return API::withUsernameAndPassword($server, $email, $password, $options);
    }

    protected function getServerVersionFromResponse($response)
    {
        // Pick out the host from the EXPR (Exchange RPC over HTTP).
        foreach ($response['Account']['Protocol'] as $protocol) {
            if (($protocol['Type'] == 'EXCH' || $protocol['Type'] == 'EXPR')
                && isset($protocol['ServerVersion'])
            ) {
                return $this->parseServerVersion($protocol['ServerVersion']);
            }
        }

        return false;
    }

    protected function getServerFromResponse($response)
    {
        foreach ($response['Account']['Protocol'] as $protocol) {
            if ($protocol['Type'] == 'EXPR' && isset($protocol['Server'])) {
                return $protocol['Server'];
            }
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
     * @throws AutodiscoverFailed
     * @return API
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
        $url = 'https://www.'.$topLevelDomain.$this->autodiscoverPath;

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
        $url = 'https://autodiscover.'.$topLevelDomain.$this->autodiscoverPath;

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

        $url = 'http://autodiscover.'.$topLevelDomain.$this->autodiscoverPath;

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
        }

        return false;
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
        $srvHost = '_autodiscover._tcp.'.$topLevelDomain;
        $lookup = dns_get_record($srvHost, DNS_SRV);
        if (sizeof($lookup) > 0) {
            $host = $lookup[0]['target'];
            $url = 'https://'.$host.$this->autodiscoverPath;

            return $this->doNTLMPost($url, $email, $password, $username);
        }

        return false;
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
        $autodiscoverXml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<Autodiscover xmlns="http://schemas.microsoft.com/exchange/autodiscover/outlook/requestschema/2006">
 <Request>
  <EMailAddress>$email</EMailAddress>
  <AcceptableResponseSchema>http://schemas.microsoft.com/exchange/autodiscover/outlook/responseschema/2006a</AcceptableResponseSchema>
 </Request>
</Autodiscover>
XML;
        $postOptions = [
            'body' => $autodiscoverXml,
            'timeout' => 2,
            'allow_redirects' => true,
            'headers' => [
                'Content-Type' => 'text/xml; charset=utf-8'
            ],
            'curl' => []
        ];
        $auth = ExchangeWebServicesAuth::fromUsernameAndPassword($username, $password);
        $postOptions = array_replace_recursive($postOptions, $auth);

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
     * @throws AutodiscoverFailed
     */
    protected function parseAutodiscoverResponse($response)
    {
        // Content-type isn't trustworthy, unfortunately. Shame on Microsoft.
        if (substr($response, 0, 5) !== '<?xml') {
            throw new AutodiscoverFailed();
        }

        $response = $this->responseToArray($response);

        if (isset($response['Error'])) {
            return false;
        }

        $action = $response['Account']['Action'];
        if ($action == 'redirectUrl' || $action == 'redirectAddr') {
            return false;
        }

        return $response;
    }

    /**
     * Get a top level domain based on an email address
     *
     * @param string $email
     * @return string|false
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
     * Utility function to parse XML payloads from the response into easier
     * to manage associative arrays.
     *
     * @param string $xml XML to parse
     * @return array
     */
    protected function responseToArray($xml)
    {
        $xml = simplexml_load_string($xml, "SimpleXMLElement", LIBXML_NOCDATA);

        return json_decode(json_encode($xml), true)['Response'];
    }
}
