<?php

namespace Tingo\ews\Test\API;

use Tingo\ews\API\ExchangeWebServicesAuth;
use Tingo\ews\API\Type;
use Mockery;
use PHPUnit_Framework_TestCase;

class ExchangeWebServicesAuthTest extends PHPUnit_Framework_TestCase
{
    public function testFromUsernameAndPassword()
    {
        $expected = array(
            'curl' => array(
                CURLOPT_HTTPAUTH => CURLAUTH_BASIC | CURLAUTH_NTLM,
                CURLOPT_USERPWD => 'testUser' . ':' . 'testPassword'
            )
        );

        $this->assertEquals($expected, ExchangeWebServicesAuth::fromUsernameAndPassword('testUser', 'testPassword'));
    }
}
