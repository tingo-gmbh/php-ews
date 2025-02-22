<?php
/**
 * Contains \Tingo\ews\API\Enumeration\ConferenceType.
 */

namespace Tingo\ews\API\Enumeration;

/**
 * Defines the type of conferencing that is performed with a calendar item.
 *
 * @package php-ews\Enumeration
 */
class ConferenceType extends Enumeration
{
    /**
     * The meeting is offline.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    const CHAT = 2;

    /**
     * The meeting is an Internet meeting.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    const NET_MEETING = 0;

    /**
     * The meeting is an Internet show (such as a webinar).
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    const NET_SHOW = 1;
}
