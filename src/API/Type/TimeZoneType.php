<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing TimeZoneType
 *
 *
 * XSD Type: TimeZoneType
 *
 * @method string getTimeZoneName()
 * @method TimeZoneType setTimeZoneName(string $timeZoneName)
 * @method \DateInterval getBaseOffset()
 * @method TimeZoneType setBaseOffset(\DateInterval $baseOffset)
 * @method TimeChangeType getStandard()
 * @method TimeZoneType setStandard(TimeChangeType $standard)
 * @method TimeChangeType getDaylight()
 * @method TimeZoneType setDaylight(TimeChangeType $daylight)
 */
class TimeZoneType extends Type
{

    /**
     * @var string
     */
    protected $timeZoneName = null;

    /**
     * @var \DateInterval
     */
    protected $baseOffset = null;

    /**
     * @var \Tingo\ews\API\Type\TimeChangeType
     */
    protected $standard = null;

    /**
     * @var \Tingo\ews\API\Type\TimeChangeType
     */
    protected $daylight = null;
}
