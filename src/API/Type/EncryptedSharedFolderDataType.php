<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing EncryptedSharedFolderDataType
 *
 *
 * XSD Type: EncryptedSharedFolderDataType
 *
 * @method EncryptedDataContainerType getToken()
 * @method EncryptedSharedFolderDataType setToken(EncryptedDataContainerType $token)
 * @method EncryptedDataContainerType getData()
 * @method EncryptedSharedFolderDataType setData(EncryptedDataContainerType $data)
 */
class EncryptedSharedFolderDataType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\EncryptedDataContainerType
     */
    protected $token = null;

    /**
     * @var \Tingo\ews\API\Type\EncryptedDataContainerType
     */
    protected $data = null;
}
