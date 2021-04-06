<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing FindItemResponseMessageType
 *
 *
 * XSD Type: FindItemResponseMessageType
 *
 * @method \Tingo\ews\API\Type\FindItemParentType getRootFolder()
 * @method FindItemResponseMessageType setRootFolder(\Tingo\ews\API\Type\FindItemParentType $rootFolder)
 */
class FindItemResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\FindItemParentType
     */
    protected $rootFolder = null;
}
