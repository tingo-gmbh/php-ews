<?php
/**
 * Contains \Tingo\ews\API\EnumerationConnectionFailureCauseType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

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
