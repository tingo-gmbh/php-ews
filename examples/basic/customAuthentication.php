<?php

// If you have custom authentication needs such as using a custom header, you can pass in your own authentication
// options when creating an API. This will be passed in as part of the options to a Guzzle CURL request.

// For example, if you want to have username and password authentication while having a custom header, try this
use Tingo\ews\API;

$authentication = array(
    'curl' => array(
        CURLOPT_HTTPAUTH => CURLAUTH_BASIC | CURLAUTH_NTLM,
        CURLOPT_USERPWD => 'username:password'
    ),
    'headers' => array(
        'Custom-Auth-Header' => 'authToken'
    )
);

$api = API::withCustomAuthentication('server', $authentication);
