<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\DelegateFolderPermissionLevelType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing DelegateFolderPermissionLevelType
 *
 *
 * XSD Type: DelegateFolderPermissionLevelType
 */
class DelegateFolderPermissionLevelType extends Enumeration
{

    const AUTHOR = 'Author';

    const CUSTOM = 'Custom';

    const EDITOR = 'Editor';

    const NONE = 'None';

    const REVIEWER = 'Reviewer';
}
