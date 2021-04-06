<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseFolderIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseFolderIdsType
 *
 * @method NonEmptyArrayOfBaseFolderIdsType addFolderId(FolderIdType $folderId)
 * @method FolderIdType[] getFolderId()
 * @method NonEmptyArrayOfBaseFolderIdsType setFolderId(array $folderId)
 * @method NonEmptyArrayOfBaseFolderIdsType addDistinguishedFolderId(DistinguishedFolderIdType $distinguishedFolderId)
 * @method DistinguishedFolderIdType[] getDistinguishedFolderId()
 * @method NonEmptyArrayOfBaseFolderIdsType setDistinguishedFolderId(array $distinguishedFolderId)
 */
class NonEmptyArrayOfBaseFolderIdsType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\FolderIdType[]
     */
    protected $folderId = null;

    /**
     * @var \Tingo\ews\API\Type\DistinguishedFolderIdType[]
     */
    protected $distinguishedFolderId = null;
}
