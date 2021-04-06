<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing RefreshSharingFolderType
 *
 *
 * XSD Type: RefreshSharingFolderType
 *
 * @method \Tingo\ews\API\Type\FolderIdType getSharingFolderId()
 * @method RefreshSharingFolderType setSharingFolderId(\Tingo\ews\API\Type\FolderIdType $sharingFolderId)
 */
class RefreshSharingFolderType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\FolderIdType
     */
    protected $sharingFolderId = null;
}
