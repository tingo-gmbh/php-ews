<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing ExportItemsType
 *
 *
 * XSD Type: ExportItemsType
 *
 * @method ExportItemsType addItemIds(\Tingo\ews\API\Type\ItemIdType $itemIds)
 * @method \Tingo\ews\API\Type\ItemIdType[] getItemIds()
 * @method ExportItemsType setItemIds(array $itemIds)
 */
class ExportItemsType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\ItemIdType[]
     */
    protected $itemIds = null;
}
