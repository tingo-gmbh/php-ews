<?php
/**
 * Contains \Tingo\ews\API\Enumeration\CalendarItemTypeType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

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
