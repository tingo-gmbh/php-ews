<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing BaseMoveCopyFolderType
 *
 *
 * XSD Type: BaseMoveCopyFolderType
 *
 * @method \Tingo\ews\API\Type\TargetFolderIdType getToFolderId()
 * @method BaseMoveCopyFolderType setToFolderId(\Tingo\ews\API\Type\TargetFolderIdType $toFolderId)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method BaseMoveCopyFolderType setFolderIds(\Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class BaseMoveCopyFolderType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\TargetFolderIdType
     */
    protected $toFolderId = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;
}
