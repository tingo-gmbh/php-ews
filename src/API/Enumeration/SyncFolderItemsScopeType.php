<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\SyncFolderItemsScopeType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

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
