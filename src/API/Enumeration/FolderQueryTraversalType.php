<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\FolderQueryTraversalType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

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
