<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetSharingMetadataResponseMessageType
 *
 *
 * XSD Type: GetSharingMetadataResponseMessageType
 *
 * @method GetSharingMetadataResponseMessageType addEncryptedSharedFolderDataCollection(\Tingo\ews\API\Type\EncryptedSharedFolderDataType $encryptedSharedFolderDataCollection)
 * @method \Tingo\ews\API\Type\EncryptedSharedFolderDataType[] getEncryptedSharedFolderDataCollection()
 * @method GetSharingMetadataResponseMessageType setEncryptedSharedFolderDataCollection(array $encryptedSharedFolderDataCollection)
 * @method GetSharingMetadataResponseMessageType addInvalidRecipients(\Tingo\ews\API\Type\InvalidRecipientType $invalidRecipients)
 * @method \Tingo\ews\API\Type\InvalidRecipientType[] getInvalidRecipients()
 * @method GetSharingMetadataResponseMessageType setInvalidRecipients(array $invalidRecipients)
 */
class GetSharingMetadataResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\EncryptedSharedFolderDataType[]
     */
    protected $encryptedSharedFolderDataCollection = null;

    /**
     * @var \Tingo\ews\API\Type\InvalidRecipientType[]
     */
    protected $invalidRecipients = null;
}
