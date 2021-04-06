<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing SyncFolderItemsChangesType
 *
 *
 * XSD Type: SyncFolderItemsChangesType
 *
 * @method SyncFolderItemsChangesType addCreate(SyncFolderItemsCreateOrUpdateType $create)
 * @method SyncFolderItemsCreateOrUpdateType[] getCreate()
 * @method SyncFolderItemsChangesType setCreate(array $create)
 * @method SyncFolderItemsChangesType addUpdate(SyncFolderItemsCreateOrUpdateType $update)
 * @method SyncFolderItemsCreateOrUpdateType[] getUpdate()
 * @method SyncFolderItemsChangesType setUpdate(array $update)
 * @method SyncFolderItemsChangesType addDelete(SyncFolderItemsDeleteType $delete)
 * @method SyncFolderItemsDeleteType[] getDelete()
 * @method SyncFolderItemsChangesType setDelete(array $delete)
 * @method SyncFolderItemsChangesType addReadFlagChange(SyncFolderItemsReadFlagType $readFlagChange)
 * @method SyncFolderItemsReadFlagType[] getReadFlagChange()
 * @method SyncFolderItemsChangesType setReadFlagChange(array $readFlagChange)
 */
class SyncFolderItemsChangesType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\SyncFolderItemsCreateOrUpdateType[]
     */
    protected $create = null;

    /**
     * @var \Tingo\ews\API\Type\SyncFolderItemsCreateOrUpdateType[]
     */
    protected $update = null;

    /**
     * @var \Tingo\ews\API\Type\SyncFolderItemsDeleteType[]
     */
    protected $delete = null;

    /**
     * @var \Tingo\ews\API\Type\SyncFolderItemsReadFlagType[]
     */
    protected $readFlagChange = null;
}
