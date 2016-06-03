<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\ResponseTypeType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing ResponseTypeType
 *
 *
 * XSD Type: ResponseTypeType
 */
class ResponseTypeType extends Enumeration
{

    const ACCEPT = 'Accept';

    const DECLNE = 'Decline';

    const NONE = 'NoResponseReceived';

    const ORGANIZER = 'Organizer';

    const TENTATIVE = 'Tentative';

    const UNKNOWN = 'Unknown';

    const DECLINE = 'Decline';

    const NO_RESPONSE_RECEIVED = 'NoResponseReceived';
}
