<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing RecurrenceType
 *
 *
 * XSD Type: RecurrenceType
 *
 * @method RelativeYearlyRecurrencePatternType getRelativeYearlyRecurrence()
 * @method RecurrenceType setRelativeYearlyRecurrence(RelativeYearlyRecurrencePatternType $relativeYearlyRecurrence)
 * @method AbsoluteYearlyRecurrencePatternType getAbsoluteYearlyRecurrence()
 * @method RecurrenceType setAbsoluteYearlyRecurrence(AbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence)
 * @method RelativeMonthlyRecurrencePatternType getRelativeMonthlyRecurrence()
 * @method RecurrenceType setRelativeMonthlyRecurrence(RelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence)
 * @method AbsoluteMonthlyRecurrencePatternType getAbsoluteMonthlyRecurrence()
 * @method RecurrenceType setAbsoluteMonthlyRecurrence(AbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence)
 * @method WeeklyRecurrencePatternType getWeeklyRecurrence()
 * @method RecurrenceType setWeeklyRecurrence(WeeklyRecurrencePatternType $weeklyRecurrence)
 * @method DailyRecurrencePatternType getDailyRecurrence()
 * @method RecurrenceType setDailyRecurrence(DailyRecurrencePatternType $dailyRecurrence)
 * @method NoEndRecurrenceRangeType getNoEndRecurrence()
 * @method RecurrenceType setNoEndRecurrence(NoEndRecurrenceRangeType $noEndRecurrence)
 * @method EndDateRecurrenceRangeType getEndDateRecurrence()
 * @method RecurrenceType setEndDateRecurrence(EndDateRecurrenceRangeType $endDateRecurrence)
 * @method NumberedRecurrenceRangeType getNumberedRecurrence()
 * @method RecurrenceType setNumberedRecurrence(NumberedRecurrenceRangeType $numberedRecurrence)
 */
class RecurrenceType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\RelativeYearlyRecurrencePatternType
     */
    protected $relativeYearlyRecurrence = null;

    /**
     * @var \Tingo\ews\API\Type\AbsoluteYearlyRecurrencePatternType
     */
    protected $absoluteYearlyRecurrence = null;

    /**
     * @var \Tingo\ews\API\Type\RelativeMonthlyRecurrencePatternType
     */
    protected $relativeMonthlyRecurrence = null;

    /**
     * @var \Tingo\ews\API\Type\AbsoluteMonthlyRecurrencePatternType
     */
    protected $absoluteMonthlyRecurrence = null;

    /**
     * @var \Tingo\ews\API\Type\WeeklyRecurrencePatternType
     */
    protected $weeklyRecurrence = null;

    /**
     * @var \Tingo\ews\API\Type\DailyRecurrencePatternType
     */
    protected $dailyRecurrence = null;

    /**
     * @var \Tingo\ews\API\Type\NoEndRecurrenceRangeType
     */
    protected $noEndRecurrence = null;

    /**
     * @var \Tingo\ews\API\Type\EndDateRecurrenceRangeType
     */
    protected $endDateRecurrence = null;

    /**
     * @var \Tingo\ews\API\Type\NumberedRecurrenceRangeType
     */
    protected $numberedRecurrence = null;
}
