<?php

namespace Tingo\ews\API\Exception;

use Tingo\ews\API;
use Tingo\ews\API\Message\ResponseMessageType;
use Throwable;

class ExchangeException extends API\Exception
{
    /**
     * @var ResponseMessageType
     */
    private $response;

    public function __construct(ResponseMessageType $response, $code = 0, Throwable $previous = null)
    {
        $this->response = $response;
        parent::__construct($response->getMessageText(), $code, $previous);
    }

    /**
     * @return ResponseMessageType
     */
    public function getResponse()
    {
        return $this->response;
    }
}
