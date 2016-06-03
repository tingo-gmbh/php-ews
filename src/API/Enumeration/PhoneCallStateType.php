<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\PhoneCallStateType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing PhoneCallStateType
 *
 *
 * XSD Type: PhoneCallStateType
 */
class PhoneCallStateType extends Enumeration
{

    const ALERTED = 'Alerted';

    const CONNECTED = 'Connected';

    const CONNECTING = 'Connecting';

    const DISCONNECTED = 'Disconnected';

    const FORWARDING = 'Forwarding';

    const IDLE = 'Idle';

    const INCOMING = 'Incoming';

    const TRANSFERRING = 'Transferring';
}
