<?php

namespace Tingo\ews\Test\Utilities;

use Tingo\ews\Test\BaseTestCase;

class EnsureIsDateTimeTest extends BaseTestCase
{
    public function testEnsureDateTime()
    {
        $this->assertEquals(new \DateTime('2015-01-01'), \Tingo\ews\Utilities\ensureIsDateTime('2015-01-01'));
        $this->assertNotSame(new \DateTime('2015-01-01'), \Tingo\ews\Utilities\ensureIsDateTime('2015-01-01'));

        $dateTime = new \DateTime('2015-01-01');
        $this->assertSame($dateTime, \Tingo\ews\Utilities\ensureIsDateTime($dateTime));
    }
}
