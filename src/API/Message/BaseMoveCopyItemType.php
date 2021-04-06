<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing BaseMoveCopyItemType
 *
 *
 * XSD Type: BaseMoveCopyItemType
 *
 * @method \Tingo\ews\API\Type\TargetFolderIdType getToFolderId()
 * @method BaseMoveCopyItemType setToFolderId(\Tingo\ews\API\Type\TargetFolderIdType $toFolderId)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method BaseMoveCopyItemType setItemIds(\Tingo\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method boolean isReturnNewItemIds()
 * @method boolean getReturnNewItemIds()
 * @method BaseMoveCopyItemType setReturnNewItemIds(boolean $returnNewItemIds)
 */
class BaseMoveCopyItemType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\TargetFolderIdType
     */
    protected $toFolderId = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;

    /**
     * @var boolean
     */
    protected $returnNewItemIds = null;
}
