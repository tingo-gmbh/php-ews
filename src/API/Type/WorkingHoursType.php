<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing WorkingHoursType
 *
 *
 * XSD Type: WorkingHours
 *
 * @method SerializableTimeZoneType getTimeZone()
 * @method WorkingHoursType setTimeZone(SerializableTimeZoneType $timeZone)
 * @method WorkingHoursType addWorkingPeriodArray(WorkingPeriodType $workingPeriodArray)
 * @method WorkingPeriodType[] getWorkingPeriodArray()
 * @method WorkingHoursType setWorkingPeriodArray(array $workingPeriodArray)
 */
class WorkingHoursType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\SerializableTimeZoneType
     */
    protected $timeZone = null;

    /**
     * @var \Tingo\ews\API\Type\WorkingPeriodType[]
     */
    protected $workingPeriodArray = null;
}
