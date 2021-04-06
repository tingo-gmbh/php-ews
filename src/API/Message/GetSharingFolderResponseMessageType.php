<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetSharingFolderResponseMessageType
 *
 *
 * XSD Type: GetSharingFolderResponseMessageType
 *
 * @method \Tingo\ews\API\Type\FolderIdType getSharingFolderId()
 * @method GetSharingFolderResponseMessageType setSharingFolderId(\Tingo\ews\API\Type\FolderIdType $sharingFolderId)
 */
class GetSharingFolderResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\FolderIdType
     */
    protected $sharingFolderId = null;
}
