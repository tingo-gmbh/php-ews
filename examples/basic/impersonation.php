<?php

use Tingo\ews\API\Type\ConnectingSIDType;
use Tingo\ews\API\Type\ExchangeImpersonation;

//Impersonate an email address
$api = \Tingo\ews\API::withUsernameAndPassword(
    'server',
    'username',
    'password',
    ['impersonation' => 'user@domain.com']
);

//Build your own impersonation
$connectingSID = new ConnectingSIDType();
$connectingSID->setPrincipalName('Some Name');
$connectingSID->setPrimarySmtpAddress('user@domain.com');

$impersonation = new ExchangeImpersonation();
$impersonation->setConnectingSID($connectingSID);

$api = \Tingo\ews\API::withUsernameAndPassword(
    'server',
    'username',
    'password',
    ['impersonation' => $impersonation]
);
