<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\SearchFolderTraversalType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

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
