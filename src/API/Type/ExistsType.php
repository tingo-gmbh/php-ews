<?php

namespace Tingo\ews\API\Type;

/**
 * Class representing ExistsType
 *
 *
 * XSD Type: ExistsType
 *
 * @method ExistsType addFieldURI(FieldURI $fieldURI)
 * @method FieldURI[] getFieldURI()
 * @method ExistsType setFieldURI(array $fieldURI)
 * @method ExistsType addIndexedFieldURI(IndexedFieldURI $indexedFieldURI)
 * @method IndexedFieldURI[] getIndexedFieldURI()
 * @method ExistsType setIndexedFieldURI(array $indexedFieldURI)
 * @method ExistsType addExtendedFieldURI(ExtendedFieldURI $extendedFieldURI)
 * @method ExtendedFieldURI[] getExtendedFieldURI()
 * @method ExistsType setExtendedFieldURI(array $extendedFieldURI)
 */
class ExistsType extends SearchExpressionType
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
