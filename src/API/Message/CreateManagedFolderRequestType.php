<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing CreateManagedFolderRequestType
 *
 *
 * XSD Type: CreateManagedFolderRequestType
 *
 * @method CreateManagedFolderRequestType addFolderNames(string $folderNames)
 * @method string[] getFolderNames()
 * @method CreateManagedFolderRequestType setFolderNames(array $folderNames)
 * @method \Tingo\ews\API\Type\EmailAddressType getMailbox()
 * @method CreateManagedFolderRequestType setMailbox(\Tingo\ews\API\Type\EmailAddressType $mailbox)
 */
class CreateManagedFolderRequestType extends BaseRequestType
{

    /**
     * @var string[]
     */
    protected $folderNames = null;

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
