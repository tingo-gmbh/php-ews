<?php
/**
 * Contains \Tingo\ews\API\Enumeration\FolderQueryTraversalType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

/**
 * Class representing FolderQueryTraversalType
 *
 * Types of sub-tree traversal for deletion and enumeration
 * XSD Type: FolderQueryTraversalType
 */
class FolderQueryTraversalType extends Enumeration
{

    const DEEP = 'Deep';

    const SHALLOW = 'Shallow';

    const SOFT_DELETED = 'SoftDeleted';
}
