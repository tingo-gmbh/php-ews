<?php

namespace Tingo\ews\API\Message;

use Tingo\ews\API\Type\IndexedPageViewType;

/**
 * Class representing FindFolderType
 *
 *
 * XSD Type: FindFolderType
 *
 * @method string getTraversal()
 * @method FindFolderType setTraversal(string $traversal)
 * @method \Tingo\ews\API\Type\FolderResponseShapeType getFolderShape()
 * @method FindFolderType setFolderShape(\Tingo\ews\API\Type\FolderResponseShapeType $folderShape)
 * @method \Tingo\ews\API\Type\IndexedPageViewType getIndexedPageFolderView()
 * @method FindFolderType setIndexedPageFolderView(\Tingo\ews\API\Type\IndexedPageViewType $indexedPageFolderView)
 * @method \Tingo\ews\API\Type\FractionalPageViewType getFractionalPageFolderView()
 * @method FindFolderType setFractionalPageFolderView(\Tingo\ews\API\Type\FractionalPageViewType $fractionalPageFolderView)
 * @method \Tingo\ews\API\Type\RestrictionType getRestriction()
 * @method FindFolderType setRestriction(\Tingo\ews\API\Type\RestrictionType $restriction)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getParentFolderIds()
 * @method FindFolderType setParentFolderIds(\Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 */
class FindFolderType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $traversal = null;

    /**
     * @var \Tingo\ews\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \Tingo\ews\API\Type\IndexedPageViewType
     */
    protected $indexedPageFolderView = null;

    /**
     * @var \Tingo\ews\API\Type\FractionalPageViewType
     */
    protected $fractionalPageFolderView = null;

    /**
     * @var \Tingo\ews\API\Type\RestrictionType
     */
    protected $restriction = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $parentFolderIds = null;

    public function setIndexedPage(IndexedPageViewType $page)
    {
        $this->indexedPageFolderView = $page;
        return $this;
    }
}
