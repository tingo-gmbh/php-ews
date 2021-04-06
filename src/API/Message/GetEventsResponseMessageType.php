<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetEventsResponseMessageType
 *
 *
 * XSD Type: GetEventsResponseMessageType
 *
 * @method \Tingo\ews\API\Type\NotificationType getNotification()
 * @method GetEventsResponseMessageType setNotification(\Tingo\ews\API\Type\NotificationType $notification)
 */
class GetEventsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\NotificationType
     */
    protected $notification = null;
}
