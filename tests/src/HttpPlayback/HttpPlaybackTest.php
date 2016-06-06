<?php

namespace garethp\ews\Test;

use garethp\ews\HttpPlayback\Factory;

class HttpPlaybackTest extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        $DS = DIRECTORY_SEPARATOR;

        $filename = __DIR__ . $DS . 'testDir' . $DS . 'testFile.json';

        if (file_exists($filename)) {
            unlink($filename);
        }

        rmdir(__DIR__ . $DS . 'testDir');
    }

    public function testEndRecord()
    {
        $DS = DIRECTORY_SEPARATOR;

        $filename = $DS . 'testDir' . $DS . 'testFile.json';

        $client = Factory::getInstance([
            'recordLocation' => __DIR__,
            'recordFileName' => $filename
        ]);

        $client->endRecord();

        $this->assertFileNotExists(__DIR__ . $filename);

        $client = Factory::getInstance([
            'recordLocation' => __DIR__,
            'recordFileName' => $filename,
            'mode' => 'record'
        ]);

        $client->endRecord();
        $this->assertFileExists(__DIR__ . $filename);
        $this->assertEquals('[]', file_get_contents(__DIR__ . $filename));

        unlink(__DIR__ . $filename);
    }
}
