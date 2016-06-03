<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\FlagStatusType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing FlagStatusType
 *
 *
 * XSD Type: FlagStatusType
 */
class FlagStatusType extends Enumeration
{

    const COMPLETE = 'Complete';

    const FLAGGED = 'Flagged';

    const NOT_FLAGGED = 'NotFlagged';
}
