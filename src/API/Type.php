<?php
/**
 * Contains \garethp\ews\API\Type.
 */

namespace garethp\ews\API;

use garethp\ews\Caster;

/**
 * Base class for Exchange Web Service Types.
 *
 * @package php-ews\Type
 */
class Type
{
    use MagicMethodsTrait;

    /**
     * @var string
     */
    public $_ = '';

    public $_value = null;

    public function getNonNullItems($includeHiddenValue = false)
    {
        $items = get_object_vars($this);

        foreach ($items as $key => $item) {
            if (substr($key, 0, 1) == "_" || $item === null) {
                unset($items[$key]);
            }
        }

        if ($includeHiddenValue && $this->_value !== null) {
            $items['_value'] = $this->_value;
        }

        return $items;
    }

    /**
     * @param $array
     * @return static
     */
    public static function buildFromArray($array)
    {
        if (!is_array($array)) {
            return $array;
        }

        if (!self::arrayIsAssoc($array)) {
            return self::buildArrayFromArray($array);
        } else {
            return self::buildObjectFromArray($array);
        }
    }

    protected static function buildObjectFromArray($array)
    {
        $object = new static();
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $value = self::buildFromArray($value);
            }

            //I think _value is a more expressive way to set string value, but Soap needs _
            if ($key === "_value") {
                $key = "_";
            }

            $object->$key = $value;
        }

        return $object;
    }

    public static function buildArrayFromArray($array)
    {
        foreach ($array as $key => $value) {
            $array[$key] = self::buildFromArray($value);
        }

        return $array;
    }

    public function toXmlObject()
    {
        $objectToReturn = new self();
        $objectToReturn->_ = (string) $this;

        $properties = $this->getNonNullItems(true);

        foreach ($properties as $name => $property) {
            //I think _value is a more expressive way to set string value, but Soap needs _
            if ($name == "_value") {
                $name = "_";
            }

            $name = ucfirst($name);
            $objectToReturn->$name = $this->propertyToXml($name, $property);
        }

        return $objectToReturn;
    }

    /**
     * @param $name
     * @param $property
     * @return array|Type|null
     */
    protected function propertyToXml($name, $property)
    {
        if (isset($this->_typeMap[lcfirst($name)])) {
            $property = $this->castToExchange($property, $this->_typeMap[lcfirst($name)]);
        }

        if ($property instanceof Type) {
            $property = $property->toXmlObject();
        }

        if (is_array($property) && $this->arrayIsAssoc($property)) {
            $property = $this->buildFromArray($property);
        }

        if (is_array($property)) {
            foreach ($property as $key => $value) {
                if ($value instanceof Type) {
                    $property[$key] = $value->toXmlObject();
                }
            }

            return $property;
        }

        return $property;
    }

    public static function arrayIsAssoc($array)
    {
        return (bool) count(array_filter(array_keys($array), 'is_string'));
    }

    /**
     * Clones any object properties on a type object when it is cloned. Allows
     * for a deep clone required when using object to represent data types when
     * making a SOAP call.
     */
    public function __clone()
    {
        // Iterate over all properties on the current object.
        foreach (get_object_vars($this) as $property => $value) {
            // If the value of the property is an object then clone it.
            if (is_object($value)) {
                $this->$property = clone $value;
            } elseif (is_array($value)) {
                // The value is an array that may use objects as values. Iterate
                // over the array and clone any values that are objects into a
                // new array.
                // For some reason, if we try to set $this->$property to an
                // empty array then update it as we go it ends up being empty.
                // If we use a new array that we then set as the value of
                // $this->$property all is well.
                $new_value = array();
                foreach ($value as $index => $array_value) {
                    $new_value[$index] = (is_object($array_value) ? clone $array_value : $array_value);
                }

                // Set the property to the new array.
                $this->$property = $new_value;
            }
        }
    }

    public function __toString()
    {
        if (!is_string($this->_)) {
            return '';
        }

        return $this->_;
    }
}
