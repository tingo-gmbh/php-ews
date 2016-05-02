<?php
/**
 * Contains \garethp\ews\API\Enumeration\ConnectionStatusType.
 */

namespace garethp\ews\API\Enumeration;

use \garethp\ews\API\Enumeration;

/**
 * Provides a text description of the status of a streaming subscription.
 *
 * @package php-ews\Enumeration
 */
class ConnectionStatusType extends Enumeration
{
    /**
     * Specifies that the connection has been closed.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CLOSED = 'Closed';

    /**
     * Specifies that the connection is open.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const OK = 'OK';
}
