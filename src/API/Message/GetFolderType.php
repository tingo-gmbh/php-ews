<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetFolderType
 *
 *
 * XSD Type: GetFolderType
 *
 * @method \Tingo\ews\API\Type\FolderResponseShapeType getFolderShape()
 * @method GetFolderType setFolderShape(\Tingo\ews\API\Type\FolderResponseShapeType $folderShape)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method GetFolderType setFolderIds(\Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class GetFolderType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\FolderResponseShapeType
     */
    protected $folderShape = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;
}
