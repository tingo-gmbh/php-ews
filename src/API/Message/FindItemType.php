<?php

namespace Tingo\ews\API\Message;

use Tingo\ews\API\Type\IndexedPageViewType;

/**
 * Class representing FindItemType
 *
 *
 * XSD Type: FindItemType
 *
 * @method string getTraversal()
 * @method FindItemType setTraversal(string $traversal)
 * @method \Tingo\ews\API\Type\ItemResponseShapeType getItemShape()
 * @method FindItemType setItemShape(\Tingo\ews\API\Type\ItemResponseShapeType $itemShape)
 * @method \Tingo\ews\API\Type\IndexedPageViewType getIndexedPageItemView()
 * @method FindItemType setIndexedPageItemView(\Tingo\ews\API\Type\IndexedPageViewType $indexedPageItemView)
 * @method \Tingo\ews\API\Type\FractionalPageViewType getFractionalPageItemView()
 * @method FindItemType setFractionalPageItemView(\Tingo\ews\API\Type\FractionalPageViewType $fractionalPageItemView)
 * @method \Tingo\ews\API\Type\CalendarViewType getCalendarView()
 * @method FindItemType setCalendarView(\Tingo\ews\API\Type\CalendarViewType $calendarView)
 * @method \Tingo\ews\API\Type\ContactsViewType getContactsView()
 * @method FindItemType setContactsView(\Tingo\ews\API\Type\ContactsViewType $contactsView)
 * @method \Tingo\ews\API\Type\GroupByType getGroupBy()
 * @method FindItemType setGroupBy(\Tingo\ews\API\Type\GroupByType $groupBy)
 * @method \Tingo\ews\API\Type\DistinguishedGroupByType getDistinguishedGroupBy()
 * @method FindItemType setDistinguishedGroupBy(\Tingo\ews\API\Type\DistinguishedGroupByType $distinguishedGroupBy)
 * @method \Tingo\ews\API\Type\RestrictionType getRestriction()
 * @method FindItemType setRestriction(\Tingo\ews\API\Type\RestrictionType $restriction)
 * @method FindItemType addSortOrder(\Tingo\ews\API\Type\FieldOrderType $sortOrder)
 * @method \Tingo\ews\API\Type\FieldOrderType[] getSortOrder()
 * @method FindItemType setSortOrder(array $sortOrder)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getParentFolderIds()
 * @method FindItemType setParentFolderIds(\Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 * @method string getQueryString()
 * @method FindItemType setQueryString(string $queryString)
 */
class FindItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $traversal = null;

    /**
     * @var \Tingo\ews\API\Type\ItemResponseShapeType
     */
    protected $itemShape = null;

    /**
     * @var \Tingo\ews\API\Type\IndexedPageViewType
     */
    protected $indexedPageItemView = null;

    /**
     * @var \Tingo\ews\API\Type\FractionalPageViewType
     */
    protected $fractionalPageItemView = null;

    /**
     * @var \Tingo\ews\API\Type\CalendarViewType
     */
    protected $calendarView = null;

    /**
     * @var \Tingo\ews\API\Type\ContactsViewType
     */
    protected $contactsView = null;

    /**
     * @var \Tingo\ews\API\Type\GroupByType
     */
    protected $groupBy = null;

    /**
     * @var \Tingo\ews\API\Type\DistinguishedGroupByType
     */
    protected $distinguishedGroupBy = null;

    /**
     * @var \Tingo\ews\API\Type\RestrictionType
     */
    protected $restriction = null;

    /**
     * @var \Tingo\ews\API\Type\FieldOrderType[]
     */
    protected $sortOrder = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $parentFolderIds = null;

    /**
     * @var string
     */
    protected $queryString = null;

    public function setIndexedPage(IndexedPageViewType $page)
    {
        $this->indexedPageItemView = $page;
        return $this;
    }
}
