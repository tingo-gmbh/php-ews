<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing SyncFolderHierarchyType
 *
 *
 * XSD Type: SyncFolderHierarchyType
 *
 * @method \Tingo\ews\API\Type\FolderResponseShapeType getFolderShape()
 * @method SyncFolderHierarchyType setFolderShape(\Tingo\ews\API\Type\FolderResponseShapeType $folderShape)
 * @method \Tingo\ews\API\Type\TargetFolderIdType getSyncFolderId()
 * @method SyncFolderHierarchyType setSyncFolderId(\Tingo\ews\API\Type\TargetFolderIdType $syncFolderId)
 * @method string getSyncState()
 * @method SyncFolderHierarchyType setSyncState(string $syncState)
 */
class SyncFolderHierarchyType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \Tingo\ews\API\Type\TargetFolderIdType
     */
    protected $syncFolderId = null;

    /**
     * @var string
     */
    protected $syncState = null;
}
