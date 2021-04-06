<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfItemChangeDescriptionsType
 *
 *
 * XSD Type: NonEmptyArrayOfItemChangeDescriptionsType
 *
 * @method NonEmptyArrayOfItemChangeDescriptionsType addAppendToItemField(AppendToItemFieldType $appendToItemField)
 * @method AppendToItemFieldType[] getAppendToItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setAppendToItemField(array $appendToItemField)
 * @method NonEmptyArrayOfItemChangeDescriptionsType addSetItemField(SetItemFieldType $setItemField)
 * @method SetItemFieldType[] getSetItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setSetItemField(array $setItemField)
 * @method NonEmptyArrayOfItemChangeDescriptionsType addDeleteItemField(DeleteItemFieldType $deleteItemField)
 * @method DeleteItemFieldType[] getDeleteItemField()
 * @method NonEmptyArrayOfItemChangeDescriptionsType setDeleteItemField(array $deleteItemField)
 */
class NonEmptyArrayOfItemChangeDescriptionsType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\AppendToItemFieldType[]
     */
    protected $appendToItemField = null;

    /**
     * @var \Tingo\ews\API\Type\SetItemFieldType[]
     */
    protected $setItemField = null;

    /**
     * @var \Tingo\ews\API\Type\DeleteItemFieldType[]
     */
    protected $deleteItemField = null;
}
