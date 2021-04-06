<?php

namespace Tingo\ews\API\Message;

use Tingo\ews\API\Message;

/**
 * Class representing BaseResponseMessageType
 *
 *
 * XSD Type: BaseResponseMessageType
 *
 * @method ArrayOfResponseMessagesType getResponseMessages()
 * @method BaseResponseMessageType setResponseMessages(ArrayOfResponseMessagesType $responseMessages)
 */
class BaseResponseMessageType extends Message
{

    /**
     * @var \Tingo\ews\API\Message\ArrayOfResponseMessagesType
     */
    protected $responseMessages = null;
}
