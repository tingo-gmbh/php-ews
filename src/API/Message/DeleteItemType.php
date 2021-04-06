<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing DeleteItemType
 *
 *
 * XSD Type: DeleteItemType
 *
 * @method string getDeleteType()
 * @method DeleteItemType setDeleteType(string $deleteType)
 * @method string getSendMeetingCancellations()
 * @method DeleteItemType setSendMeetingCancellations(string $sendMeetingCancellations)
 * @method string getAffectedTaskOccurrences()
 * @method DeleteItemType setAffectedTaskOccurrences(string $affectedTaskOccurrences)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method DeleteItemType setItemIds(\Tingo\ews\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds)
 */
class DeleteItemType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $deleteType = null;

    /**
     * @var string
     */
    protected $sendMeetingCancellations = null;

    /**
     * @var string
     */
    protected $affectedTaskOccurrences = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;
}
