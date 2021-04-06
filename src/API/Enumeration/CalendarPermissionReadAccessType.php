<?php
/**
 * Contains \Tingo\ews\API\Enumeration\CalendarPermissionReadAccessType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

/**
 * Class representing CalendarPermissionReadAccessType
 *
 *
 * XSD Type: CalendarPermissionReadAccessType
 */
class CalendarPermissionReadAccessType extends Enumeration
{

    const TIME_ONLY = 'TimeOnly';

    const TIME_SUBJECT_AND_LOCATION = 'TimeAndSubjectAndLocation';

    const FULL_DETAILS = 'FullDetails';

    const NONE = 'None';

    const TIME_AND_SUBJECT_AND_LOCATION = 'TimeAndSubjectAndLocation';
}
