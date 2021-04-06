<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing AggregateOnType
 *
 * Represents the field of each item to aggregate on and the qualifier to apply to that
 *  field in determining which item will represent the group.
 * XSD Type: AggregateOnType
 *
 * @method string getAggregate()
 * @method AggregateOnType setAggregate(string $aggregate)
 * @method PathToUnindexedFieldType getFieldURI()
 * @method AggregateOnType setFieldURI(PathToUnindexedFieldType $fieldURI)
 * @method PathToIndexedFieldType getIndexedFieldURI()
 * @method AggregateOnType setIndexedFieldURI(PathToIndexedFieldType $indexedFieldURI)
 * @method PathToExtendedFieldType getExtendedFieldURI()
 * @method AggregateOnType setExtendedFieldURI(PathToExtendedFieldType $extendedFieldURI)
 */
class AggregateOnType extends Type
{

    /**
     * @var string
     */
    protected $aggregate = null;

    /**
     * @var \Tingo\ews\API\Type\PathToUnindexedFieldType
     */
    protected $fieldURI = null;

    /**
     * @var \Tingo\ews\API\Type\PathToIndexedFieldType
     */
    protected $indexedFieldURI = null;

    /**
     * @var \Tingo\ews\API\Type\PathToExtendedFieldType
     */
    protected $extendedFieldURI = null;
}
