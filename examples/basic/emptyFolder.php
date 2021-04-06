<?php

require 'vendor/autoload.php';

use Tingo\ews\API;
use Tingo\ews\API\Enumeration\DistinguishedFolderIdNameType;

$api = API::withUsernameAndPassword('server', 'username', 'password');
$api->emptyFolder($api->getFolderByDistinguishedId(DistinguishedFolderIdNameType::DELETEDITEMS)->getFolderId());
