<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing UploadItemType
 *
 *
 * XSD Type: UploadItemType
 *
 * @method string getCreateAction()
 * @method UploadItemType setCreateAction(string $createAction)
 * @method boolean isAssociated()
 * @method boolean getIsAssociated()
 * @method UploadItemType setIsAssociated(boolean $isAssociated)
 * @method FolderIdType getParentFolderId()
 * @method UploadItemType setParentFolderId(FolderIdType $parentFolderId)
 * @method ItemIdType getItemId()
 * @method UploadItemType setItemId(ItemIdType $itemId)
 * @method string getData()
 * @method UploadItemType setData(string $data)
 */
class UploadItemType extends Type
{

    /**
     * @var string
     */
    protected $createAction = null;

    /**
     * @var boolean
     */
    protected $isAssociated = null;

    /**
     * @var \Tingo\ews\API\Type\FolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @var \Tingo\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var string
     */
    protected $data = null;
}
