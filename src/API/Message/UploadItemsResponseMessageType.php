<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing UploadItemsResponseMessageType
 *
 *
 * XSD Type: UploadItemsResponseMessageType
 *
 * @method \Tingo\ews\API\Type\ItemIdType getItemId()
 * @method UploadItemsResponseMessageType setItemId(\Tingo\ews\API\Type\ItemIdType $itemId)
 */
class UploadItemsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\ItemIdType
     */
    protected $itemId = null;
}
