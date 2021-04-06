<?php
/**
 * Contains \Tingo\ews\API\Enumeration\DelegateFolderPermissionLevelType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

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
