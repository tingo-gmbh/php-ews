<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing ItemChangeType
 *
 *
 * XSD Type: ItemChangeType
 *
 * @method ItemIdType getItemId()
 * @method ItemChangeType setItemId(ItemIdType $itemId)
 * @method OccurrenceItemIdType getOccurrenceItemId()
 * @method ItemChangeType setOccurrenceItemId(OccurrenceItemIdType $occurrenceItemId)
 * @method RecurringMasterItemIdType getRecurringMasterItemId()
 * @method ItemChangeType setRecurringMasterItemId(RecurringMasterItemIdType $recurringMasterItemId)
 * @method NonEmptyArrayOfItemChangeDescriptionsType getUpdates()
 * @method ItemChangeType setUpdates(NonEmptyArrayOfItemChangeDescriptionsType $updates)
 */
class ItemChangeType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var \Tingo\ews\API\Type\OccurrenceItemIdType
     */
    protected $occurrenceItemId = null;

    /**
     * @var \Tingo\ews\API\Type\RecurringMasterItemIdType
     */
    protected $recurringMasterItemId = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfItemChangeDescriptionsType
     */
    protected $updates = null;
}
