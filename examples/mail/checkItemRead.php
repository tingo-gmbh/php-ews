<?php

require_once "vendor/autoload.php";

use Tingo\ews\MailAPI;

$api = MailAPI::withUsernameAndPassword('server', 'username', 'password');

$mailItem = $api->getMailItems()[0];
$read = $mailItem->isRead();
