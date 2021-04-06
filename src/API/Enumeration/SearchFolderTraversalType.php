<?php
/**
 * Contains \Tingo\ews\API\Enumeration\SearchFolderTraversalType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

/**
 * Class representing SearchFolderTraversalType
 *
 * Types of sub-tree traversal for deletion and enumeration
 * XSD Type: SearchFolderTraversalType
 */
class SearchFolderTraversalType extends Enumeration
{

    const DEEP = 'Deep';

    const SHALLOW = 'Shallow';
}
