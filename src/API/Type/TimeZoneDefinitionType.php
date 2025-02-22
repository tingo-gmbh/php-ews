<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing TimeZoneDefinitionType
 *
 *
 * XSD Type: TimeZoneDefinitionType
 *
 * @method string getId()
 * @method TimeZoneDefinitionType setId(string $id)
 * @method string getName()
 * @method TimeZoneDefinitionType setName(string $name)
 * @method TimeZoneDefinitionType addPeriods(PeriodType $periods)
 * @method PeriodType[] getPeriods()
 * @method TimeZoneDefinitionType setPeriods(array $periods)
 * @method TimeZoneDefinitionType addTransitionsGroups(ArrayOfTransitionsType $transitionsGroups)
 * @method ArrayOfTransitionsType[] getTransitionsGroups()
 * @method TimeZoneDefinitionType setTransitionsGroups(array $transitionsGroups)
 * @method ArrayOfTransitionsType getTransitions()
 * @method TimeZoneDefinitionType setTransitions(ArrayOfTransitionsType $transitions)
 */
class TimeZoneDefinitionType extends Type
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var \Tingo\ews\API\Type\PeriodType[]
     */
    protected $periods = null;

    /**
     * @var \Tingo\ews\API\Type\ArrayOfTransitionsType[]
     */
    protected $transitionsGroups = null;

    /**
     * @var \Tingo\ews\API\Type\ArrayOfTransitionsType
     */
    protected $transitions = null;
}
