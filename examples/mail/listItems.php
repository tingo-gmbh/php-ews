<?php

require_once "vendor/autoload.php";

use garethp\ews\API\Type;
use garethp\ews\Mail\MailAPI;

$api = MailAPI::withUsernameAndPassword('server', 'username', 'password');

$mail = $api->getMailItems();
