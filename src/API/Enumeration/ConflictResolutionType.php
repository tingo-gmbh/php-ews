<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\ConflictResolutionType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing ConflictResolutionType
 *
 * Type of conflict resolution to attempt during update
 * XSD Type: ConflictResolutionType
 */
class ConflictResolutionType extends Enumeration
{

    const ALWAYS_OVERWRITE = 'AlwaysOverwrite';

    const AUTO_RESOLVE = 'AutoResolve';

    const NEVER_OVERWRITE = 'NeverOverwrite';
}
