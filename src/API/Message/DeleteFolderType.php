<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing DeleteFolderType
 *
 *
 * XSD Type: DeleteFolderType
 *
 * @method string getDeleteType()
 * @method DeleteFolderType setDeleteType(string $deleteType)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method DeleteFolderType setFolderIds(\Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds)
 */
class DeleteFolderType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $deleteType = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;
}
