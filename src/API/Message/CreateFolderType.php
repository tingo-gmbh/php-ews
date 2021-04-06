<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing CreateFolderType
 *
 *
 * XSD Type: CreateFolderType
 *
 * @method \Tingo\ews\API\Type\TargetFolderIdType getParentFolderId()
 * @method CreateFolderType setParentFolderId(\Tingo\ews\API\Type\TargetFolderIdType $parentFolderId)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfFoldersType getFolders()
 * @method CreateFolderType setFolders(\Tingo\ews\API\Type\NonEmptyArrayOfFoldersType $folders)
 */
class CreateFolderType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\TargetFolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfFoldersType
     */
    protected $folders = null;
}
