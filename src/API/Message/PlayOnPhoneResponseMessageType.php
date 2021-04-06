<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing PlayOnPhoneResponseMessageType
 *
 *
 * XSD Type: PlayOnPhoneResponseMessageType
 *
 * @method \Tingo\ews\API\Type\PhoneCallIdType getPhoneCallId()
 * @method PlayOnPhoneResponseMessageType setPhoneCallId(\Tingo\ews\API\Type\PhoneCallIdType $phoneCallId)
 */
class PlayOnPhoneResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\PhoneCallIdType
     */
    protected $phoneCallId = null;
}
