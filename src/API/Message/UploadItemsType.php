<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing UploadItemsType
 *
 *
 * XSD Type: UploadItemsType
 *
 * @method UploadItemsType addItems(\Tingo\ews\API\Type\UploadItemType $items)
 * @method \Tingo\ews\API\Type\UploadItemType[] getItems()
 * @method UploadItemsType setItems(array $items)
 */
class UploadItemsType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\UploadItemType[]
     */
    protected $items = null;
}
