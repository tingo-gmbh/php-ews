<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing ConvertIdType
 *
 * Converts the passed source ids into the destination format. Change keys are not
 *  returned.
 * XSD Type: ConvertIdType
 *
 * @method string getDestinationFormat()
 * @method ConvertIdType setDestinationFormat(string $destinationFormat)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfAlternateIdsType getSourceIds()
 * @method ConvertIdType setSourceIds(\Tingo\ews\API\Type\NonEmptyArrayOfAlternateIdsType $sourceIds)
 */
class ConvertIdType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $destinationFormat = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfAlternateIdsType
     */
    protected $sourceIds = null;
}
