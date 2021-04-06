<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing FieldURIOrConstantType
 *
 *
 * XSD Type: FieldURIOrConstantType
 *
 * @method FieldURI getFieldURI()
 * @method FieldURIOrConstantType setFieldURI(FieldURI $fieldURI)
 * @method IndexedFieldURI getIndexedFieldURI()
 * @method FieldURIOrConstantType setIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method ExtendedFieldURI getExtendedFieldURI()
 * @method FieldURIOrConstantType setExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ConstantValueType getConstant()
 * @method FieldURIOrConstantType setConstant(ConstantValueType $constant)
 */
class FieldURIOrConstantType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\FieldURI
     */
    protected $fieldURI = null;

    /**
     * @var \Tingo\ews\API\Type\IndexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @var \Tingo\ews\API\Type\ExtendedFieldURI
     */
    protected $extendedFieldURI = null;

    /**
     * @var \Tingo\ews\API\Type\ConstantValueType
     */
    protected $constant = null;
}
