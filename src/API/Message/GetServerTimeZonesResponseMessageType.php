<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetServerTimeZonesResponseMessageType
 *
 *
 * XSD Type: GetServerTimeZonesResponseMessageType
 *
 * @method GetServerTimeZonesResponseMessageType addTimeZoneDefinitions(\Tingo\ews\API\Type\TimeZoneDefinitionType $timeZoneDefinitions)
 * @method \Tingo\ews\API\Type\TimeZoneDefinitionType[] getTimeZoneDefinitions()
 * @method GetServerTimeZonesResponseMessageType setTimeZoneDefinitions(array $timeZoneDefinitions)
 */
class GetServerTimeZonesResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\TimeZoneDefinitionType[]
     */
    protected $timeZoneDefinitions = null;
}
