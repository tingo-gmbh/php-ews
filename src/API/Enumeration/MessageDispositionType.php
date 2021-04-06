<?php
/**
 * Contains \Tingo\ews\API\Enumeration\MessageDispositionType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

/**
 * Class representing MessageDispositionType
 *
 *
 * XSD Type: MessageDispositionType
 */
class MessageDispositionType extends Enumeration
{

    const SAVE_ONLY = 'SaveOnly';

    const SEND_AND_SAVE_COPY = 'SendAndSaveCopy';

    const SEND_ONLY = 'SendOnly';
}
