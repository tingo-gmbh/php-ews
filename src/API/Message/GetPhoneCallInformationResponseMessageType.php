<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetPhoneCallInformationResponseMessageType
 *
 *
 * XSD Type: GetPhoneCallInformationResponseMessageType
 *
 * @method \Tingo\ews\API\Type\PhoneCallInformationType getPhoneCallInformation()
 * @method GetPhoneCallInformationResponseMessageType setPhoneCallInformation(\Tingo\ews\API\Type\PhoneCallInformationType $phoneCallInformation)
 */
class GetPhoneCallInformationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\PhoneCallInformationType
     */
    protected $phoneCallInformation = null;
}
