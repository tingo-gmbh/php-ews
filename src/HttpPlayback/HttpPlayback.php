<?php

namespace jamesiarmes\PEWS\HttpPlayback;

use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client;

class HttpPlayback
{
    protected $mode = 'live';

    protected $callList = [];

    protected $recordLocation;

    protected $recordFileName = 'saveState.json';

    private $shutdownRegistered = false;

    private static $instances = [];

    /**
     * @var Client
     */
    private $client;

    public static function getInstance($options = [])
    {
        foreach (self::$instances as $instance) {
            if ($instance['options'] == $options) {
                return $instance['instance'];
            }
        }

        $instance = new static();
        $instance->setPlaybackOptions($options);
        self::$instances[] = [
            'instance' => $instance,
            'options' => $options
        ];

        return $instance;
    }

    public function setPlaybackOptions($options = [])
    {
        $options = array_replace_recursive(
            ['mode' => null, 'recordLocation' => null, 'recordFileName' => null],
            $options
        );

        if ($options['mode'] !== null) {
            $this->mode = $options['mode'];
        }

        if ($options['recordLocation'] !== null) {
            $this->recordLocation = $options['recordLocation'];
        }

        if ($options['recordFileName'] !== null) {
            $this->recordFileName = $options['recordFileName'];
        }
    }

    /**
     * Get the client for making calls
     *
     * @return Client
     */
    public function getHttpClient()
    {
        if ($this->client !== null) {
            return $this->client;
        }

        $handler = HandlerStack::create();

        if ($this->mode == 'record') {
            $history = Middleware::history($this->callList);
            $handler->push($history);
        } elseif ($this->mode == 'playback') {
            $recordings = $this->getRecordings();
            $mockHandler = new MockHandler($this->arrayToResponses($recordings));
            $handler = HandlerStack::create($mockHandler);
        }

        $this->registerShutdown();
        $this->client = new Client(['handler' => $handler]);

        return $this->client;
    }

    /**
     * Sets the client
     *
     * @param Client $client
     * @return $this
     */
    public function setHttpClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public function getRecordLocation()
    {
        if (!$this->recordLocation) {
            $dir = __DIR__;
            $dirPos = strrpos($dir, "src/API");
            $dir = substr($dir, 0, $dirPos);

            $this->recordLocation = $dir.'Resources/recordings/';
        }

        return $this->recordLocation;
    }

    public function getRecordFilePath()
    {
        $path = $this->getRecordLocation() . $this->recordFileName;
        $path = str_replace("\\", "/", $path);

        return $path;
    }

    public function getRecordings()
    {
        $saveLocation = $this->getRecordFilePath();
        $records = json_decode(file_get_contents($saveLocation), true);

        return $records;
    }

    public function endRecord()
    {
        if ($this->mode != 'record') {
            return;
        }

        $saveList = $this->responsesToArray($this->callList);

        $saveLocation = $this->getRecordFilePath();
        $folder = pathinfo($saveLocation)['dirname'];
        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }

        file_put_contents($saveLocation, json_encode($saveList));
    }

    protected function registerShutdown()
    {
        if (!$this->shutdownRegistered) {
            register_shutdown_function(array($this, 'endRecord'));
            $this->shutdownRegistered = true;
        }
    }

    /**
     * @param $responses
     * @return array
     */
    protected function responsesToArray($responses)
    {
        $array = [];
        foreach ($responses as $item) {
            /** @var Response $response */
            $response = $item['response'];

            if (!isset($item['error'])) {
                $save = [
                    'error' => false,
                    'statusCode' => $response->getStatusCode(),
                    'headers' => $response->getHeaders(),
                    'body' => $response->getBody()->__toString()
                ];
            } else {
                $save = [
                    'error' => true,
                    'errorClass' => get_class($item['error']),
                    'errorMessage' => $item['error']->getMessage(),
                    'request' => [
                        'method' => $item['request']->getMethod(),
                        'uri' => $item['request']->getUri()->__toString(),
                        'headers' => $item['request']->getHeaders(),
                        'body' => $item['request']->getBody()->__toString()
                    ]
                ];
            }
            $array[] = $save;
        }

        return $array;
    }

    /**
     * @param $items
     * @return Response[]
     */
    protected function arrayToResponses($items)
    {
        $mockedResponses = [];
        foreach ($items as $item) {
            if (!$item['error']) {
                $mockedResponses[] = new Response($item['statusCode'], $item['headers'], $item['body']);
            } else {
                $errorClass = $item['errorClass'];
                $request = new Request(
                    $item['request']['method'],
                    $item['request']['uri'],
                    $item['request']['headers'],
                    $item['request']['body']
                );
                $mockedResponses[] = new $errorClass($item['errorMessage'], $request);
            }
        }

        return $mockedResponses;
    }
}
