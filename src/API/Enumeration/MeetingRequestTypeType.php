<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\MeetingRequestTypeType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing MeetingRequestTypeType
 *
 *
 * XSD Type: MeetingRequestTypeType
 */
class MeetingRequestTypeType extends Enumeration
{

    const FULL_UPDATE = 'FullUpdate';

    const INFORMATIONAL_UPDATE = 'InformationalUpdate';

    const NEW_MEETING_REQUEST = 'NewMeetingRequest';

    const NONE = 'None';

    const OUTDATED = 'Outdated';

    const PRINCIPAL_WANTS_COPY = 'PrincipalWantsCopy';

    const SILENT_UPDATE = 'SilentUpdate';
}
