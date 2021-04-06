<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing PlayOnPhoneType
 *
 *
 * XSD Type: PlayOnPhoneType
 *
 * @method \Tingo\ews\API\Type\ItemIdType getItemId()
 * @method PlayOnPhoneType setItemId(\Tingo\ews\API\Type\ItemIdType $itemId)
 * @method string getDialString()
 * @method PlayOnPhoneType setDialString(string $dialString)
 */
class PlayOnPhoneType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var string
     */
    protected $dialString = null;
}
