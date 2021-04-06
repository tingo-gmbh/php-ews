<?php

namespace Tingo\ews\API\Message;

use Tingo\ews\API\Message;

/**
 * Class representing ResponseMessageType
 *
 *
 * XSD Type: ResponseMessageType
 *
 * @method string getResponseClass()
 * @method ResponseMessageType setResponseClass(string $responseClass)
 * @method string getMessageText()
 * @method ResponseMessageType setMessageText(string $messageText)
 * @method string getResponseCode()
 * @method ResponseMessageType setResponseCode(string $responseCode)
 * @method integer getDescriptiveLinkKey()
 * @method ResponseMessageType setDescriptiveLinkKey(integer $descriptiveLinkKey)
 * @method \Tingo\ews\API\Message\ResponseMessageType\MessageXmlAType getMessageXml()
 * @method ResponseMessageType setMessageXml(\Tingo\ews\API\Message\ResponseMessageType\MessageXmlAType $messageXml)
 */
class ResponseMessageType extends Message
{

    /**
     * @var string
     */
    protected $responseClass = null;

    /**
     * @var string
     */
    protected $messageText = null;

    /**
     * @var string
     */
    protected $responseCode = null;

    /**
     * @var integer
     */
    protected $descriptiveLinkKey = null;

    /**
     * @var \Tingo\ews\API\Message\ResponseMessageType\MessageXmlAType
     */
    protected $messageXml = null;
}
