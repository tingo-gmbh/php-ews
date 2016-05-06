<?php

use garethp\ews\Contacts\ContactsAPI as API;

$api = API::withUsernameAndPassword('server', 'username', 'password');

$contact = $api->getContacts();

$api->updateContactItem($contact[0]->getItemId(), array(
    'deleteFields' => array (
        'GivenName',
        'PhoneNumber:HomePhone'
    )
));
