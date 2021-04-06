<?php
/**
 * Created by PhpStorm.
 * User: true
 * Date: 25-6-15
 * Time: 17:23
 */

namespace Tingo\ews\Test\API;

use Tingo\ews\Test\BaseTestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Tingo\ews\API\NTLMSoapClient;
use PHPUnit_Framework_TestCase;
use ReflectionClass;
use Mockery;
use GuzzleHttp\Middleware;
use SoapHeader;
use Tingo\ews\API;

class NTLMSoapClientTest extends BaseTestCase
{
    public function getClientMock()
    {
        $mock = Mockery::mock('Tingo\ews\API\NTLMSoapClient')->shouldDeferMissing();

        return $mock;
    }

    public function testValidateCertificate()
    {
        $reflection = new ReflectionClass('\Tingo\ews\API\NTLMSoapClient');
        $prop = $reflection->getProperty('validate');
        $prop->setAccessible(true);

        $client = new NTLMSoapClient(
            'location',
            API\ExchangeWebServicesAuth::fromUsernameAndPassword('user', 'password'),
            __DIR__ . '/../../../Resources/wsdl/services.wsdl'
        );

        $this->assertFalse($prop->getValue($client));

        $client->validateCertificate(true);
        $this->assertTrue($prop->getValue($client));

        $client->validateCertificate(false);
        $this->assertFalse($prop->getValue($client));
    }
}
