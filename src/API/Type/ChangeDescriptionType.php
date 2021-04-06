<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing ChangeDescriptionType
 *
 *
 * XSD Type: ChangeDescriptionType
 *
 * @method ChangeDescriptionType addFieldURI(FieldURI $fieldURI)
 * @method FieldURI[] getFieldURI()
 * @method ChangeDescriptionType setFieldURI(array $fieldURI)
 * @method ChangeDescriptionType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method IndexedFieldURI[] getIndexedFieldURI()
 * @method ChangeDescriptionType setIndexedFieldURI(array $indexedFieldURI)
 * @method ChangeDescriptionType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ExtendedFieldURI[] getExtendedFieldURI()
 * @method ChangeDescriptionType setExtendedFieldURI(array $extendedFieldURI)
 */
class ChangeDescriptionType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\FieldURI[]
     */
    protected $fieldURI = null;

    /**
     * @var \Tingo\ews\API\Type\IndexedFieldURI[]
     */
    protected $indexedFieldURI = null;

    /**
     * @var \Tingo\ews\API\Type\ExtendedFieldURI[]
     */
    protected $extendedFieldURI = null;
}
