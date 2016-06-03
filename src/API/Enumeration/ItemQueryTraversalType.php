<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\ItemQueryTraversalType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing ItemQueryTraversalType
 *
 * Types of sub-tree traversal for deletion and enumeration
 * XSD Type: ItemQueryTraversalType
 */
class ItemQueryTraversalType extends Enumeration
{

    const ASSOCIATED = 'Associated';

    const SHALLOW = 'Shallow';

    const SOFT_DELETED = 'SoftDeleted';
}
