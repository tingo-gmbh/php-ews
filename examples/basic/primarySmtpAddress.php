<?php

require_once "vendor/autoload.php";

use Tingo\ews\API\Type;
use Tingo\ews\API\Type\CalendarItem;
use Tingo\ews\Caster;
use Tingo\ews\Test\API\TypeTest;
use Tingo\ews\CalendarAPI;

$api = \Tingo\ews\API::withUsernameAndPassword(
    'server',
    'username',
    'password',
    [
        'primarySmtpEmailAddress' => 'secondaryEmail@test.com'
    ]
);

$api->getFolderByDistinguishedId('inbox');
