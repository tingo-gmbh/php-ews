<?php
/**
 * Contains \Tingo\ews\API\Enumeration\SyncFolderItemsScopeType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

/**
 * Class representing SyncFolderItemsScopeType
 *
 *
 * XSD Type: SyncFolderItemsScopeType
 */
class SyncFolderItemsScopeType extends Enumeration
{

    const NORMAL = 'NormalItems';

    const NORMAL_AND_ASSOCIATED = 'NormalAndAssociatedItems';

    const NORMAL_ITEMS = 'NormalItems';

    const NORMAL_AND_ASSOCIATED_ITEMS = 'NormalAndAssociatedItems';
}
