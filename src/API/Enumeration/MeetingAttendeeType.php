<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\MeetingAttendeeType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

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
