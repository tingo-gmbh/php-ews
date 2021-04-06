<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing FindFolderResponseMessageType
 *
 *
 * XSD Type: FindFolderResponseMessageType
 *
 * @method \Tingo\ews\API\Type\FindFolderParentType getRootFolder()
 * @method FindFolderResponseMessageType setRootFolder(\Tingo\ews\API\Type\FindFolderParentType $rootFolder)
 */
class FindFolderResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\FindFolderParentType
     */
    protected $rootFolder = null;
}
