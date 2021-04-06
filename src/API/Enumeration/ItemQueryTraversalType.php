<?php
/**
 * Contains \Tingo\ews\API\Enumeration\ItemQueryTraversalType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

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
