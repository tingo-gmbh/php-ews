<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing TargetFolderIdType
 *
 *
 * XSD Type: TargetFolderIdType
 *
 * @method FolderIdType getFolderId()
 * @method TargetFolderIdType setFolderId(FolderIdType $folderId)
 * @method DistinguishedFolderIdType getDistinguishedFolderId()
 * @method TargetFolderIdType setDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 */
class TargetFolderIdType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @var \Tingo\ews\API\Type\DistinguishedFolderIdType
     */
    protected $distinguishedFolderId = null;
}
