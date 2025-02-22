<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing OccurrenceInfoType
 *
 *
 * XSD Type: OccurrenceInfoType
 *
 * @method ItemIdType getItemId()
 * @method OccurrenceInfoType setItemId(ItemIdType $itemId)
 * @method \DateTime getStart()
 * @method OccurrenceInfoType setStart(\DateTime $start)
 * @method \DateTime getEnd()
 * @method OccurrenceInfoType setEnd(\DateTime $end)
 * @method \DateTime getOriginalStart()
 * @method OccurrenceInfoType setOriginalStart(\DateTime $originalStart)
 */
class OccurrenceInfoType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var \DateTime
     */
    protected $start = null;

    protected $_typeMap = array(
        'start' => 'dateTime',
        'end' => 'dateTime',
        'originalStart' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $end = null;

    /**
     * @var \DateTime
     */
    protected $originalStart = null;
}
