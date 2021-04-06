<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing SyncFolderItemsType
 *
 *
 * XSD Type: SyncFolderItemsType
 *
 * @method \Tingo\ews\API\Type\ItemResponseShapeType getItemShape()
 * @method SyncFolderItemsType setItemShape(\Tingo\ews\API\Type\ItemResponseShapeType $itemShape)
 * @method \Tingo\ews\API\Type\TargetFolderIdType getSyncFolderId()
 * @method SyncFolderItemsType setSyncFolderId(\Tingo\ews\API\Type\TargetFolderIdType $syncFolderId)
 * @method string getSyncState()
 * @method SyncFolderItemsType setSyncState(string $syncState)
 * @method SyncFolderItemsType addIgnore(\Tingo\ews\API\Type\ItemIdType $ignore)
 * @method \Tingo\ews\API\Type\ItemIdType[] getIgnore()
 * @method SyncFolderItemsType setIgnore(array $ignore)
 * @method integer getMaxChangesReturned()
 * @method SyncFolderItemsType setMaxChangesReturned(integer $maxChangesReturned)
 * @method string getSyncScope()
 * @method SyncFolderItemsType setSyncScope(string $syncScope)
 */
class SyncFolderItemsType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\ItemResponseShapeType
     */
    protected $itemShape = null;

    /**
     * @var \Tingo\ews\API\Type\TargetFolderIdType
     */
    protected $syncFolderId = null;

    /**
     * @var string
     */
    protected $syncState = null;

    /**
     * @var \Tingo\ews\API\Type\ItemIdType[]
     */
    protected $ignore = null;

    /**
     * @var integer
     */
    protected $maxChangesReturned = null;

    /**
     * @var string
     */
    protected $syncScope = null;
}
