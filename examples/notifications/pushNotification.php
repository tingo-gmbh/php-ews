<?php

require_once('vendor/autoload.php');

use Tingo\ews\API\Enumeration\NotificationEventTypeType;
use Tingo\ews\API\Enumeration\SubscriptionStatusType;
use Tingo\ews\API\Type\DistinguishedFolderIdType;
use Tingo\ews\NotificationAPI;
use Tingo\ews\API\Type\NotificationType;

//First you subscribe to notifications
$api = NotificationAPI::withUsernameAndPassword('server', 'username', 'password');
$api->subscribeToPushNotifications(
    new DistinguishedFolderIdType('inbox'),
    [NotificationEventTypeType::NEW_MAIL_EVENT],
    $urlToHanldeNotifications,
    1
);

//Then, in a separate file you handle a notification when EWS sends it to you
NotificationAPI::handlePullNotification($uri, function (NotificationType $notification) {
    $newMailEvent = $notification->getNewMailEvent();

    return SubscriptionStatusType::OK;
});
