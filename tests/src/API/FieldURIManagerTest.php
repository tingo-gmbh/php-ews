<?php

namespace garethp\ews\Test\API;

use garethp\ews\API\Enumeration\DictionaryURIType;
use garethp\ews\API\Enumeration\UnindexedFieldURIType;
use garethp\ews\API\FieldURIManager;

class FieldURIManagerTest extends \PHPUnit_Framework_TestCase
{
    public function testGetFieldUrisFromClass()
    {
        $dictionaryURIs = FieldURIManager::getFieldUrisFromClass(DictionaryURIType::class);
        $this->assertEquals('contacts:PhysicalAddress:City', $dictionaryURIs['physicaladdress']['contacts']['city']);
        $this->assertEquals('contacts:ImAddress', $dictionaryURIs['imaddress']['contacts']);

        $unindexedFieldURIs = FieldURIManager::getFieldUrisFromClass(UnindexedFieldURIType::class);
        $this->assertEquals('item:Body', $unindexedFieldURIs['body']['item']);
        return;
    }
}
