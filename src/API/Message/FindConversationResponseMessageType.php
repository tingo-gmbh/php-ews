<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing FindConversationResponseMessageType
 *
 *
 * XSD Type: FindConversationResponseMessageType
 *
 * @method FindConversationResponseMessageType addConversations(\Tingo\ews\API\Type\ConversationType $conversations)
 * @method \Tingo\ews\API\Type\ConversationType[] getConversations()
 * @method FindConversationResponseMessageType setConversations(array $conversations)
 */
class FindConversationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\ConversationType[]
     */
    protected $conversations = null;
}
