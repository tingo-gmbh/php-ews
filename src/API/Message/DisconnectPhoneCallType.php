<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing DisconnectPhoneCallType
 *
 *
 * XSD Type: DisconnectPhoneCallType
 *
 * @method \Tingo\ews\API\Type\PhoneCallIdType getPhoneCallId()
 * @method DisconnectPhoneCallType setPhoneCallId(\Tingo\ews\API\Type\PhoneCallIdType $phoneCallId)
 */
class DisconnectPhoneCallType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\PhoneCallIdType
     */
    protected $phoneCallId = null;
}
