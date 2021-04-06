<?php

namespace Tingo\ews\API\Message;

use Tingo\ews\API\Message;

/**
 * Class representing SendNotificationResultType
 *
 *
 * XSD Type: SendNotificationResultType
 *
 * @method string getSubscriptionStatus()
 * @method SendNotificationResultType setSubscriptionStatus(string $subscriptionStatus)
 */
class SendNotificationResultType extends Message
{

    /**
     * @var string
     */
    protected $subscriptionStatus = null;
}
