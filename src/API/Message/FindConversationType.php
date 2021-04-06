<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing FindConversationType
 *
 *
 * XSD Type: FindConversationType
 *
 * @method \Tingo\ews\API\Type\IndexedPageViewType getIndexedPageItemView()
 * @method FindConversationType setIndexedPageItemView(\Tingo\ews\API\Type\IndexedPageViewType $indexedPageItemView)
 * @method FindConversationType addSortOrder(\Tingo\ews\API\Type\FieldOrderType $sortOrder)
 * @method \Tingo\ews\API\Type\FieldOrderType[] getSortOrder()
 * @method FindConversationType setSortOrder(array $sortOrder)
 * @method \Tingo\ews\API\Type\TargetFolderIdType getParentFolderId()
 * @method FindConversationType setParentFolderId(\Tingo\ews\API\Type\TargetFolderIdType $parentFolderId)
 */
class FindConversationType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\IndexedPageViewType
     */
    protected $indexedPageItemView = null;

    /**
     * @var \Tingo\ews\API\Type\FieldOrderType[]
     */
    protected $sortOrder = null;

    /**
     * @var \Tingo\ews\API\Type\TargetFolderIdType
     */
    protected $parentFolderId = null;
}
