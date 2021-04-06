<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing UserConfigurationDictionaryEntryType
 *
 *
 * XSD Type: UserConfigurationDictionaryEntryType
 *
 * @method UserConfigurationDictionaryObjectType getDictionaryKey()
 * @method UserConfigurationDictionaryEntryType setDictionaryKey(UserConfigurationDictionaryObjectType $dictionaryKey)
 * @method UserConfigurationDictionaryObjectType getDictionaryValue()
 * @method UserConfigurationDictionaryEntryType setDictionaryValue(UserConfigurationDictionaryObjectType $dictionaryValue)
 */
class UserConfigurationDictionaryEntryType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\UserConfigurationDictionaryObjectType
     */
    protected $dictionaryKey = null;

    /**
     * @var \Tingo\ews\API\Type\UserConfigurationDictionaryObjectType
     */
    protected $dictionaryValue = null;
}
