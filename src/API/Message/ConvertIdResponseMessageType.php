<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing ConvertIdResponseMessageType
 *
 * Response Message for a single id conversion in the ConvertId web method. Note
 *  that the AlternateId element will be missing in the case of an error.
 * XSD Type: ConvertIdResponseMessageType
 *
 * @method \Tingo\ews\API\Type\AlternateIdBaseType getAlternateId()
 * @method ConvertIdResponseMessageType setAlternateId(\Tingo\ews\API\Type\AlternateIdBaseType $alternateId)
 */
class ConvertIdResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\AlternateIdBaseType
     */
    protected $alternateId = null;
}
