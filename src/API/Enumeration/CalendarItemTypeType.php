<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\CalendarItemTypeType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing CalendarItemTypeType
 *
 *
 * XSD Type: CalendarItemTypeType
 */
class CalendarItemTypeType extends Enumeration
{

    const EXCEPTION = 'Exception';

    const OCCURRENCE = 'Occurrence';

    const RECURRING_MASTER = 'RecurringMaster';

    const SINGLE = 'Single';
}
