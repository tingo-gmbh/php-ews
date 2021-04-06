<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing StreamingSubscriptionRequestType
 *
 *
 * XSD Type: StreamingSubscriptionRequestType
 *
 * @method boolean isSubscribeToAllFolders()
 * @method boolean getSubscribeToAllFolders()
 * @method StreamingSubscriptionRequestType setSubscribeToAllFolders(boolean $subscribeToAllFolders)
 * @method NonEmptyArrayOfBaseFolderIdsType getFolderIds()
 * @method StreamingSubscriptionRequestType setFolderIds(NonEmptyArrayOfBaseFolderIdsType $folderIds)
 * @method StreamingSubscriptionRequestType addEventTypes(string $eventTypes)
 * @method string[] getEventTypes()
 * @method StreamingSubscriptionRequestType setEventTypes(array $eventTypes)
 */
class StreamingSubscriptionRequestType extends Type
{

    /**
     * @var boolean
     */
    protected $subscribeToAllFolders = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $folderIds = null;

    /**
     * @var string[]
     */
    protected $eventTypes = null;
}
