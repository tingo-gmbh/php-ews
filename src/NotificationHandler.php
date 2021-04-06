<?php

namespace Tingo\ews;

use Tingo\ews\API\Enumeration\SubscriptionStatusType;
use Tingo\ews\API\Exception;
use Tingo\ews\API\ExchangeWebServices;
use Tingo\ews\API\Message\SendNotificationResponseMessageType;
use Tingo\ews\API\Message\SendNotificationResponseType;
use Tingo\ews\API\Message\SendNotificationResultType;

class NotificationHandler
{
    private $handler;

    public function __construct(callable $handler)
    {
        $this->handler = $handler;
    }

    // @codingStandardsIgnoreLine
    public function SendNotification(SendNotificationResponseType $message)
    {
        $message = ExchangeWebServices::drillDownResponseLevels($message);

        $handler = $this->handler;
        $response = $handler($message);

        if ($response !== SubscriptionStatusType::OK && $response !== SubscriptionStatusType::UNSUBSCRIBE) {
            throw new Exception('Unexpected Subscription Status Response');
        }

        $result = new SendNotificationResultType();
        $result->setSubscriptionStatus($response);

        return $result->toXmlObject();
    }
}
