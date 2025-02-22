<?php

namespace Tingo\ews\API\Type;

/**
 * Class representing GroupByType
 *
 * Allows consumers to specify arbitrary groupings for FindItem queries.
 * XSD Type: GroupByType
 *
 * @method PathToUnindexedFieldType getFieldURI()
 * @method GroupByType setFieldURI(PathToUnindexedFieldType $fieldURI)
 * @method PathToIndexedFieldType getIndexedFieldURI()
 * @method GroupByType setIndexedFieldURI(PathToIndexedFieldType $indexedFieldURI)
 * @method PathToExtendedFieldType getExtendedFieldURI()
 * @method GroupByType setExtendedFieldURI(PathToExtendedFieldType $extendedFieldURI)
 * @method AggregateOnType getAggregateOn()
 * @method GroupByType setAggregateOn(AggregateOnType $aggregateOn)
 */
class GroupByType extends BaseGroupByType
{

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

    /**
     * @var \Tingo\ews\API\Type\AggregateOnType
     */
    protected $aggregateOn = null;
}
