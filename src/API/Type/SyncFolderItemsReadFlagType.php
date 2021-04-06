<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing SyncFolderItemsReadFlagType
 *
 *
 * XSD Type: SyncFolderItemsReadFlagType
 *
 * @method ItemIdType getItemId()
 * @method SyncFolderItemsReadFlagType setItemId(ItemIdType $itemId)
 * @method boolean isRead()
 * @method boolean getIsRead()
 * @method SyncFolderItemsReadFlagType setIsRead(boolean $isRead)
 */
class SyncFolderItemsReadFlagType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var boolean
     */
    protected $isRead = null;
}
