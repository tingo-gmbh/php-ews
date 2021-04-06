<?php
/**
 * Contains \Tingo\ews\API\Enumeration\FlagStatusType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

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
