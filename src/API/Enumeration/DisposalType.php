<?php
/**
 * Contains \Tingo\ews\API\Enumeration\DisposalType.
 */

namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

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
