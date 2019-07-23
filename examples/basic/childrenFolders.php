<?php

use garethp\ews\API;
use garethp\ews\API\Enumeration\DistinguishedFolderIdNameType;

$api = API::withUsernameAndPassword('server', 'username', 'password');

// Get all children folders
$allFolders = $api->getChildrenFolders();

// Get all folders that are children of a distinguished folder
$inboxFolders = $api->getChildrenFolders(DistinguishedFolderIdNameType::INBOX);
$contactFolders = $api->getChildrenFolders(DistinguishedFolderIdNameType::CONTACTS);
$calendarFolders = $api->getChildrenFolders(DistinguishedFolderIdNameType::CALENDAR);

// Get the children of a specific folder
$testFolder = $api->getFolderByDisplayName('Test', DistinguishedFolderIdNameType::INBOX);
$childFolders = $api->getChildrenFolders($testFolder->getFolderId());
