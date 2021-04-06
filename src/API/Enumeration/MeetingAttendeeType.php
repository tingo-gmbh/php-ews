<?php
/**
 * Contains \Tingo\ews\API\Enumeration\MeetingAttendeeType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

/**
 * Class representing MeetingAttendeeType
 *
 *
 * XSD Type: MeetingAttendeeType
 */
class MeetingAttendeeType extends Enumeration
{

    const OPTIONAL = 'Optional';

    const ORGANIZER = 'Organizer';

    const REQUIRED = 'Required';

    const RESOURCE = 'Resource';

    const ROOM = 'Room';
}
