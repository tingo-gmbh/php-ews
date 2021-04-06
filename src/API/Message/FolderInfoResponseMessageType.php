<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing FolderInfoResponseMessageType
 *
 *
 * XSD Type: FolderInfoResponseMessageType
 *
 * @method \Tingo\ews\API\Type\ArrayOfFoldersType getFolders()
 * @method FolderInfoResponseMessageType setFolders(\Tingo\ews\API\Type\ArrayOfFoldersType $folders)
 */
class FolderInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\ArrayOfFoldersType
     */
    protected $folders = null;
}
