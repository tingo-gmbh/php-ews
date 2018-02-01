<?php

namespace garethp\ews;

use garethp\ews\API\ClassMap;

class NotificationAPI
{
    public static function handlePullNotification($uri, callable $handle, array $options = array())
    {
        $server = new \SoapServer(
            __DIR__ . '/../Resources/wsdl/notification-service.wsdl',
            [
                'uri' => $uri,
                'classmap' => ClassMap::getClassMap(),
            ]
        );
        $server->setObject(new NotificationHandler($handle));
        $server->handle();

        return $server;
    }
}