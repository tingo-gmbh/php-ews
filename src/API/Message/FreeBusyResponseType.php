<?php

namespace Tingo\ews\API\Message;

use Tingo\ews\API\Message;

/**
 * Class representing FreeBusyResponseType
 *
 *
 * XSD Type: FreeBusyResponseType
 *
 * @method ResponseMessageType getResponseMessage()
 * @method FreeBusyResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method \Tingo\ews\API\Type\FreeBusyViewType getFreeBusyView()
 * @method FreeBusyResponseType setFreeBusyView(\Tingo\ews\API\Type\FreeBusyViewType $freeBusyView)
 */
class FreeBusyResponseType extends Message
{

    /**
     * @var \Tingo\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \Tingo\ews\API\Type\FreeBusyViewType
     */
    protected $freeBusyView = null;
}
