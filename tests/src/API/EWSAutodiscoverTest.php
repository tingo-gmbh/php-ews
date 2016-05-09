<?php


namespace garethp\ews\Test\API;

use garethp\ews\API\EWSAutodiscover as Autodiscover;

class EWSAutodiscover extends \PHPUnit_Framework_TestCase
{
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

    public function serverVersionProvider()
    {
        return [
            ['73C08484', 'Exchange2013'],
            ['73c18484', 'Exchange2013_SP1'],
            ['72008287', 'Exchange2007'],
            ['77818484', false]
        ];
    }
}
