<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing ExportItemsResponseMessageType
 *
 *
 * XSD Type: ExportItemsResponseMessageType
 *
 * @method \Tingo\ews\API\Type\ItemIdType getItemId()
 * @method ExportItemsResponseMessageType setItemId(\Tingo\ews\API\Type\ItemIdType $itemId)
 * @method string getData()
 * @method ExportItemsResponseMessageType setData(string $data)
 */
class ExportItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var string
     */
    protected $data = null;
}
