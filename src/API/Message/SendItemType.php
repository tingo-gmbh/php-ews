<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing SendItemType
 *
 *
 * XSD Type: SendItemType
 *
 * @method boolean isSaveItemToFolder()
 * @method boolean getSaveItemToFolder()
 * @method SendItemType setSaveItemToFolder(boolean $saveItemToFolder)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method SendItemType setItemIds(\Tingo\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method \Tingo\ews\API\Type\TargetFolderIdType getSavedItemFolderId()
 * @method SendItemType setSavedItemFolderId(\Tingo\ews\API\Type\TargetFolderIdType $savedItemFolderId)
 */
class SendItemType extends BaseRequestType
{

    /**
     * @var boolean
     */
    protected $saveItemToFolder = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;

    /**
     * @var \Tingo\ews\API\Type\TargetFolderIdType
     */
    protected $savedItemFolderId = null;
}
