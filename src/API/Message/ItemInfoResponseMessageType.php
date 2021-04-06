<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing ItemInfoResponseMessageType
 *
 *
 * XSD Type: ItemInfoResponseMessageType
 *
 * @method \Tingo\ews\API\Type\ArrayOfRealItemsType getItems()
 * @method ItemInfoResponseMessageType setItems(\Tingo\ews\API\Type\ArrayOfRealItemsType $items)
 */
class ItemInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\ArrayOfRealItemsType
     */
    protected $items = null;
}
