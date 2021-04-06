<?php

require_once "vendor/autoload.php";

use Tingo\ews\API\Type;
use Tingo\ews\MailAPI;

$api = MailAPI::withUsernameAndPassword('server', 'username', 'password');

$mail = $api->getMailItems();
