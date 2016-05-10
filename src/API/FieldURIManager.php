<?php

namespace garethp\ews\API;

use garethp\ews\API\Enumeration\DictionaryURIType;
use garethp\ews\API\Enumeration\UnindexedFieldURIType;
use garethp\ews\API\Exception\ExchangeException;

class FieldURIManager
{
    protected static $unIndexedFieldURIs = [];
    protected static $dictionaryFieldURIs = [];

    /**
     * @deprecated This will be made protected in 0.9
     */
    public static function setupFieldUris()
    {
        self::$unIndexedFieldURIs = self::getFieldUrisFromClass(UnindexedFieldURIType::class);

        self::$dictionaryFieldURIs = self::getFieldUrisFromClass(DictionaryURIType::class);
    }

    /**
     * @deprecated This will be made protected in 0.9
     *
     * @param $className
     * @return array
     */
    public static function getFieldUrisFromClass($className)
    {
        //So, since we have to pass in URI's of everything we update, we need to fetch them
        $reflection = new \ReflectionClass($className);
        $constants = $reflection->getConstants();
        $constantsFound = array();

        //Loop through all URI's to list them in an array
        foreach ($constants as $constant) {
            $exploded = explode(":", $constant);
            if (count($exploded) == 1) {
                $exploded = ['item', $exploded[0]];
            }

            $name = strtolower($exploded[1]);
            $category = strtolower($exploded[0]);

            if (!isset($constantsFound[$name])) {
                $constantsFound[$name] = array();
            }
            if (count($exploded) == 3) {
                $entry = strtolower($exploded[2]);
                if (!isset($constantsFound[$name])) {
                    $constantsFound[$name][$category] = array();
                }

                $constantsFound[$name][$category][$entry] = $constant;
            } else {
                $constantsFound[$name][$category] = $constant;
            }
        }

        return $constantsFound;
    }

    public static function getFieldUriByName($fieldName, $preference = 'item')
    {
        $fieldName = strtolower($fieldName);
        $preference = strtolower($preference);

        if (empty(self::$unIndexedFieldURIs)) {
            self::setupFieldUris();
        }

        if (!isset(self::$unIndexedFieldURIs[$fieldName])) {
            return false;
        }

        if (!isset(self::$unIndexedFieldURIs[$fieldName][$preference])) {
            $preference = 'item';
        }

        if (!isset(self::$unIndexedFieldURIs[$fieldName][$preference])) {
            throw new ExchangeException("Could not find uri $preference:$fieldName");
        }

        return self::$unIndexedFieldURIs[$fieldName][$preference];
    }

    public static function getIndexedFieldUriByName($fieldName, $preference = 'item', $entryKey = false)
    {
        $fieldName = strtolower($fieldName);
        $preference = strtolower($preference);

        if (empty(self::$dictionaryFieldURIs)) {
            self::setupFieldUris();
        }

        if (!isset(self::$dictionaryFieldURIs[$fieldName])) {
            return false;
        }

        if (!isset(self::$dictionaryFieldURIs[$fieldName][$preference])) {
            $preference = 'item';
        }

        if (!isset(self::$dictionaryFieldURIs[$fieldName][$preference])) {
            throw new ExchangeException("Could not find uri $preference:$fieldName");
        }

        $fieldUri = self::$dictionaryFieldURIs[$fieldName][$preference];
        if (is_array($fieldUri)) {
            if (!$entryKey) {
                throw new ExchangeException("Please enter a specific entry key for this fieldURI");
            }

            $entryKey = strtolower($entryKey);
            if (!isset($fieldUri[$entryKey])) {
                throw new ExchangeException("Could not find uri $preference:$fieldName:$entryKey");
            }

            $fieldUri = $fieldUri[$entryKey];
        }

        return $fieldUri;
    }
}
