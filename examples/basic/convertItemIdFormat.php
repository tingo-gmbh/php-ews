<?php

use Tingo\ews\API;
use Tingo\ews\API\Enumeration;
use Tingo\ews\API\Type;

//Create and build the client
$api = API::withUsernameAndPassword('server', 'username', 'password');

$ews2007ItemId = new Type\ItemIdType($ews2007Id, $changeKey);
$ews2010ItemId = $api->convertIdFormat(
    $ews2007ItemId,
    Enumeration\IdFormatType::EWS_LEGACY_ID,
    Enumeration\IdFormatType::EWS_ID,
    'user@email.com'
);
