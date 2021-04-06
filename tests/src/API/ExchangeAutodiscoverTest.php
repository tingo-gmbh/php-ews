<?php


namespace Tingo\ews\Test\API;

use Tingo\ews\API;
use Tingo\ews\API\ExchangeAutodiscover as Autodiscover;
use Tingo\ews\API\Exception\AutodiscoverFailed;

class ExchangeAutodiscoverTest extends \PHPUnit_Framework_TestCase
{
    public function testGetAPI()
    {
        $mode = getenv('HttpPlayback');
        if ($mode == false) {
            $mode = 'playback';
        }

        $auth = [
            'server' => 'server',
            'user' => 'user',
            'password' => 'password'
        ];

        if (is_file(getcwd() . '/Resources/auth.json')) {
            $auth = json_decode(file_get_contents(getcwd() . '/Resources/auth.json'), true);
        }

        $client = Autodiscover::getAPI(
            $auth['user'],
            $auth['password'],
            $auth['user'],
            [
                'httpPlayback' => [
                    'mode' => $mode,
                    'recordFileName' => self::class . '.' . $this->getName() . '.json',
                    'recordLocation' => realpath(__DIR__ . '/../../../Resources/recordings') . '/'
                ]
            ]
        );

        $this->assertInstanceOf(API::class, $client);
    }

    /**
     * @expectedException \Tingo\ews\API\Exception\AutodiscoverFailed
     */
    public function testGetAPIFailure()
    {
        $mode = getenv('HttpPlayback');
        if ($mode == false) {
            $mode = 'playback';
        }

        $client = Autodiscover::getAPI(
            'false@falsey.com',
            'noPassword',
            'false@falseycom',
            [
                'httpPlayback' => [
                    'mode' => $mode,
                    'recordFileName' => self::class . '.' . $this->getName() . '.json',
                    'recordLocation' => realpath(__DIR__ . '/../../../Resources/recordings') . '/'
                ]
            ]
        );

        $this->assertInstanceOf(API::class, $client);
    }

    /**
     * @dataProvider serverVersionProvider
     *
     * @param $hex
     * @param $expectedVersion
     */
    public function testParseServerVersion($hex, $expectedVersion)
    {
        $reflectedClass = new \ReflectionClass(Autodiscover::class);
        $method = $reflectedClass->getMethod('parseServerVersion');
        $method->setAccessible(true);
        $instance = $reflectedClass->newInstanceWithoutConstructor();

        $version = $method->invoke($instance, $hex);
        $this->assertEquals($expectedVersion, $version);
    }

    /**
     * @TODO: Needs more, and better, test values
     */
    public function serverVersionProvider()
    {
        return [
            ['73C08484', 'Exchange2013_SP1'],
            ['72008287', 'Exchange2007'],
        ];
    }
}
