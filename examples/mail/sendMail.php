<?php

require_once "vendor/autoload.php";

use garethp\ews\API\Type;
use garethp\ews\Mail\MailAPI;

$api = MailAPI::withUsernameAndPassword('server', 'username', 'password');


$message = new Type\MessageType();
$message->setBody('Some Text');
$message->setSubject('Test Subject');
$message->setToRecipients('Test.User-True@multrix.com');

$return = $api->sendMail($message);
