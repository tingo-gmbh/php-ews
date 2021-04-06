<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetItemType
 *
 *
 * XSD Type: GetItemType
 *
 * @method \Tingo\ews\API\Type\ItemResponseShapeType getItemShape()
 * @method GetItemType setItemShape(\Tingo\ews\API\Type\ItemResponseShapeType $itemShape)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method GetItemType setItemIds(\Tingo\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 */
class GetItemType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\ItemResponseShapeType
     */
    protected $itemShape = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;
}
