<?php

namespace garethp\ews\API\Exception;

use garethp\ews\API;
use garethp\ews\API\Message\ResponseMessageType;

class ExchangeException extends API\Exception
{
    /**
     * @var ResponseMessageType
     */
    private $response;

    /**
     * @param ResponseMessageType $response
     */
    public function setResponse(ResponseMessageType $response)
    {
        $this->response = $response;
    }

    /**
     * @return ResponseMessageType
     */
    public function getResponse()
    {
        return $this->response;
    }
}
