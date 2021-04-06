<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfFolderChangeDescriptionsType
 *
 *
 * XSD Type: NonEmptyArrayOfFolderChangeDescriptionsType
 *
 * @method NonEmptyArrayOfFolderChangeDescriptionsType addAppendToFolderField(AppendToFolderFieldType $appendToFolderField)
 * @method AppendToFolderFieldType[] getAppendToFolderField()
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setAppendToFolderField(array $appendToFolderField)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType addSetFolderField(SetFolderFieldType $setFolderField)
 * @method SetFolderFieldType[] getSetFolderField()
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setSetFolderField(array $setFolderField)
 * @method NonEmptyArrayOfFolderChangeDescriptionsType addDeleteFolderField(DeleteFolderFieldType $deleteFolderField)
 * @method DeleteFolderFieldType[] getDeleteFolderField()
 * @method NonEmptyArrayOfFolderChangeDescriptionsType setDeleteFolderField(array $deleteFolderField)
 */
class NonEmptyArrayOfFolderChangeDescriptionsType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\AppendToFolderFieldType[]
     */
    protected $appendToFolderField = null;

    /**
     * @var \Tingo\ews\API\Type\SetFolderFieldType[]
     */
    protected $setFolderField = null;

    /**
     * @var \Tingo\ews\API\Type\DeleteFolderFieldType[]
     */
    protected $deleteFolderField = null;
}
