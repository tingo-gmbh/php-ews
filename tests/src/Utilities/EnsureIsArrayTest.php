<?php

namespace Tingo\ews\Test\Utilities;

use Tingo\ews\Test\BaseTestCase;

class EnsureIsArrayTest extends BaseTestCase
{
    public function testEnsureIsArray()
    {
        $this->assertSame([1], \Tingo\ews\Utilities\ensureIsArray(1));
        $this->assertSame([1], \Tingo\ews\Utilities\ensureIsArray([1]));
        $this->assertSame(['testString'], \Tingo\ews\Utilities\ensureIsArray('testString'));

        $this->assertSame(['assoc' => 'array'], \Tingo\ews\Utilities\ensureIsArray(['assoc' => 'array']));
        $this->assertSame([['assoc' => 'array']], \Tingo\ews\Utilities\ensureIsArray(['assoc' => 'array'], true));
    }
}
