<?php

require_once "vendor/autoload.php";

use Tingo\ews\API\Type;

$api = MailApi::withUsernameAndPassword('server', 'username', 'password');

//Create the message item
$message = new Type\MessageType();
$message->setSubject('Test Message');
$message->setBody('Test Draft Body');

//Set the message as not a draft using extended property types
$extended = new Type\ExtendedPropertyType();
$fieldUri = new Type\ExtendedFieldURI();
$fieldUri->setPropertyTag("0x0E07");
$fieldUri->setPropertyType(\Tingo\ews\API\Enumeration\MapiPropertyTypeType::INTEGER);
$extended->setExtendedFieldURI($fieldUri);
$extended->setValue(1);
$message->addExtendedProperty($extended);

//Pass it to the Send Mail function, but to SaveOnly without actually sending the email
$itemId = $api->sendMail($message, array('MessageDisposition' => 'SaveOnly'));

//Move the mail message from the sent folder to whatever folder we want to send it to
$api->getClient()->MoveItem(Type::buildFromArray(array(
    'ToFolderId' => array('FolderId' => $folderId->toArray()),
    'ItemIds' => array(
        'ItemId' => $itemId->toArray()
    )
)));
