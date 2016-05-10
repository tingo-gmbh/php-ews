<?php

include "vendor/autoload.php";

use jamesiarmes\PEWS\API\ExchangeAutodiscover;
use jamesiarmes\PEWS\API\Exception\AutodiscoverFailed;
use jamesiarmes\PEWS\API;

try {
    //API will now be an instance of \jamesiarmes\PEWS\API;
    $api = ExchangeAutodiscover::getAPI('test@test.com', 'password');
    $timezoneList = $api->getServerTimezones();

    //You should never run the Autodiscover more than once. It can make between 1 and 5 calls before giving up, or
    //before finding your server, depending on how many different attempts it needs to make. For this reason, you should
    //only ever do it once to find out where your server is located and what version it's running, and then hard code
    //that or store it in a database, or anything other than running Autodiscover again
    $server = $api->getClient()->getServer();
    $version = $api->getClient()->getVersion();

    $api = API::withUsernameAndPassword($server, 'test@test.com', 'password', [
        'version' => $version
    ]);
} catch (AutodiscoverFailed $exception) {
    //Autodiscover failed
}
