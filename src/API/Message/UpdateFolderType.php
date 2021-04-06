<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing UpdateFolderType
 *
 *
 * XSD Type: UpdateFolderType
 *
 * @method UpdateFolderType addFolderChanges(\Tingo\ews\API\Type\FolderChangeType $folderChanges)
 * @method \Tingo\ews\API\Type\FolderChangeType[] getFolderChanges()
 * @method UpdateFolderType setFolderChanges(array $folderChanges)
 */
class UpdateFolderType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\FolderChangeType[]
     */
    protected $folderChanges = null;
}
