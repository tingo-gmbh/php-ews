<?php

require_once('vendor/autoload.php');

use garethp\ews\API\Message\SendNotificationResultType;
use garethp\ews\API\Enumeration\SubscriptionStatusType;
use garethp\ews\NotificationAPI;
use garethp\ews\API\Type\NotificationType;

NotificationAPI::handlePullNotification($uri, function (NotificationType $notification) {
    $newMailEvent = $notification->getNewMailEvent();

    return SubscriptionStatusType::OK;
});
