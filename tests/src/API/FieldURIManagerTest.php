<?php

namespace Tingo\ews\Test\API;

use Tingo\ews\API\Enumeration\DictionaryURIType;
use Tingo\ews\API\Enumeration\UnindexedFieldURIType;
use Tingo\ews\API\FieldURIManager;

class FieldURIManagerTest extends \PHPUnit_Framework_TestCase
{
    public function testGetFieldUrisFromClass()
    {
        $reflectionMethod = new \ReflectionMethod(FieldURIManager::class, 'getFieldUrisFromClass');
        $reflectionMethod->setAccessible(true);

        $dictionaryURIs = $reflectionMethod->invoke(new DictionaryURIType(), DictionaryURIType::class);
        $this->assertEquals('contacts:PhysicalAddress:City', $dictionaryURIs['physicaladdress']['contacts']['city']);
        $this->assertEquals('contacts:ImAddress', $dictionaryURIs['imaddress']['contacts']);

        $unindexedFieldURIs = $reflectionMethod->invoke(new DictionaryURIType(), UnindexedFieldURIType::class);
        $this->assertEquals('item:Body', $unindexedFieldURIs['body']['item']);
    }
}
