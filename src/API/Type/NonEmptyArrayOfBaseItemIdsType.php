<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfBaseItemIdsType
 *
 *
 * XSD Type: NonEmptyArrayOfBaseItemIdsType
 *
 * @method NonEmptyArrayOfBaseItemIdsType addItemId(ItemIdType $itemId)
 * @method ItemIdType[] getItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setItemId(array $itemId)
 * @method NonEmptyArrayOfBaseItemIdsType addOccurrenceItemId(OccurrenceItemIdType $occurrenceItemId)
 * @method OccurrenceItemIdType[] getOccurrenceItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setOccurrenceItemId(array $occurrenceItemId)
 * @method NonEmptyArrayOfBaseItemIdsType addRecurringMasterItemId(RecurringMasterItemIdType $recurringMasterItemId)
 * @method RecurringMasterItemIdType[] getRecurringMasterItemId()
 * @method NonEmptyArrayOfBaseItemIdsType setRecurringMasterItemId(array $recurringMasterItemId)
 */
class NonEmptyArrayOfBaseItemIdsType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\ItemIdType[]
     */
    protected $itemId = null;

    /**
     * @var \Tingo\ews\API\Type\OccurrenceItemIdType[]
     */
    protected $occurrenceItemId = null;

    /**
     * @var \Tingo\ews\API\Type\RecurringMasterItemIdType[]
     */
    protected $recurringMasterItemId = null;
}
