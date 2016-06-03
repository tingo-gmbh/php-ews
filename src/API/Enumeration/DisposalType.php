<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\DisposalType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing DisposalType
 *
 *
 * XSD Type: DisposalType
 */
class DisposalType extends Enumeration
{

    const HARD_DELETE = 'HardDelete';

    const MOVE_TO_DELETED_ITEMS = 'MoveToDeletedItems';

    const SOFT_DELETE = 'SoftDelete';
}
