<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing SyncFolderItemsResponseMessageType
 *
 *
 * XSD Type: SyncFolderItemsResponseMessageType
 *
 * @method string getSyncState()
 * @method SyncFolderItemsResponseMessageType setSyncState(string $syncState)
 * @method boolean isIncludesLastItemInRange()
 * @method boolean getIncludesLastItemInRange()
 * @method SyncFolderItemsResponseMessageType setIncludesLastItemInRange(boolean $includesLastItemInRange)
 * @method \Tingo\ews\API\Type\SyncFolderItemsChangesType getChanges()
 * @method SyncFolderItemsResponseMessageType setChanges(\Tingo\ews\API\Type\SyncFolderItemsChangesType $changes)
 */
class SyncFolderItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @var string
     */
    protected $syncState = null;

    /**
     * @var boolean
     */
    protected $includesLastItemInRange = null;

    /**
     * @var \Tingo\ews\API\Type\SyncFolderItemsChangesType
     */
    protected $changes = null;
}
