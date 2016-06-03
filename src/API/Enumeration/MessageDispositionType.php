<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\MessageDispositionType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

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
