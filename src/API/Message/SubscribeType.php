<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing SubscribeType
 *
 *
 * XSD Type: SubscribeType
 *
 * @method \Tingo\ews\API\Type\PullSubscriptionRequestType getPullSubscriptionRequest()
 * @method SubscribeType setPullSubscriptionRequest(\Tingo\ews\API\Type\PullSubscriptionRequestType $pullSubscriptionRequest)
 * @method \Tingo\ews\API\Type\PushSubscriptionRequestType getPushSubscriptionRequest()
 * @method SubscribeType setPushSubscriptionRequest(\Tingo\ews\API\Type\PushSubscriptionRequestType $pushSubscriptionRequest)
 * @method \Tingo\ews\API\Type\StreamingSubscriptionRequestType getStreamingSubscriptionRequest()
 * @method SubscribeType setStreamingSubscriptionRequest(\Tingo\ews\API\Type\StreamingSubscriptionRequestType $streamingSubscriptionRequest)
 */
class SubscribeType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\PullSubscriptionRequestType
     */
    protected $pullSubscriptionRequest = null;

    /**
     * @var \Tingo\ews\API\Type\PushSubscriptionRequestType
     */
    protected $pushSubscriptionRequest = null;

    /**
     * @var \Tingo\ews\API\Type\StreamingSubscriptionRequestType
     */
    protected $streamingSubscriptionRequest = null;
}
