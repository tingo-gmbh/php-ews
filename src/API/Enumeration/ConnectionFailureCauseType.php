<?php
/**
 * Contains \jamesiarmes\PEWS\API\EnumerationConnectionFailureCauseType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing ConnectionFailureCauseType
 *
 *
 * XSD Type: ConnectionFailureCauseType
 */
class ConnectionFailureCauseType extends Enumeration
{

    const NO_ANSWER = 'NoAnswer';

    const NONE = 'None';

    const OTHER = 'Other';

    const UNAVAILABLE = 'Unavailable';

    const USER_BUSY = 'UserBusy';
}
