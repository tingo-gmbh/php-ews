<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing EmptyFolderType
 *
 *
 * XSD Type: EmptyFolderType
 *
 * @method string getDeleteType()
 * @method EmptyFolderType setDeleteType(string $deleteType)
 * @method boolean isDeleteSubFolders()
 * @method boolean getDeleteSubFolders()
 * @method EmptyFolderType setDeleteSubFolders(boolean $deleteSubFolders)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method EmptyFolderType setFolderIds(\Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class EmptyFolderType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $deleteType = null;

    /**
     * @var boolean
     */
    protected $deleteSubFolders = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;
}
