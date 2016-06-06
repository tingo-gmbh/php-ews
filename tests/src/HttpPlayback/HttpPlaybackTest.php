<?php

namespace garethp\ews\Test;

use garethp\ews\HttpPlayback\Factory;

class HttpPlaybackTest extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        $filename = __DIR__ . '/testDir/testFile.json';
        unlink(__DIR__ . '/testDir/testFile.json');
        rmdir(__DIR__ . '/testDir/');
    }

    public function testEndRecord()
    {
        $filename = __DIR__ . '/testDir/testFile.json';

        $client = Factory::getInstance([
            'recordLocation' => __DIR__,
            'recordFileName' => '/testDir/testFile.json'
        ]);

        $client->endRecord();

        $this->assertFileNotExists($filename);

        $client = Factory::getInstance([
            'recordLocation' => __DIR__,
            'recordFileName' => '/testDir/testFile.json',
            'mode' => 'record'
        ]);

        $client->endRecord();
        $this->assertFileExists($filename);
        $this->assertEquals('[]', file_get_contents($filename));
    }
}
