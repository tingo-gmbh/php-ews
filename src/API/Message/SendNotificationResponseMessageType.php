<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing SendNotificationResponseMessageType
 *
 *
 * XSD Type: SendNotificationResponseMessageType
 *
 * @method \Tingo\ews\API\Type\NotificationType getNotification()
 * @method SendNotificationResponseMessageType setNotification(\Tingo\ews\API\Type\NotificationType $notification)
 */
class SendNotificationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\NotificationType
     */
    protected $notification = null;
}
