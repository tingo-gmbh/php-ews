<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\DistinguishedPropertySetType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing DistinguishedPropertySetType
 *
 * Defines the well known property set ids for extended properties.
 * XSD Type: DistinguishedPropertySetType
 */
class DistinguishedPropertySetType extends Enumeration
{

    const ADDRESS = 'Address';

    const APPOINTMENT = 'Appointment';

    const CALENDAR_ASSISTANT = 'CalendarAssistant';

    const COMMON = 'Common';

    const INTERNET_HEADERS = 'InternetHeaders';

    const MEETING = 'Meeting';

    const PUBLIC_STRINGS = 'PublicStrings';

    const TASK = 'Task';

    const UNIFIED_MESSAGING = 'UnifiedMessaging';
}
