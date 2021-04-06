<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing ApplyConversationActionType
 *
 *
 * XSD Type: ApplyConversationActionType
 *
 * @method ApplyConversationActionType addConversationActions(\Tingo\ews\API\Type\ConversationActionType $conversationActions)
 * @method \Tingo\ews\API\Type\ConversationActionType[] getConversationActions()
 * @method ApplyConversationActionType setConversationActions(array $conversationActions)
 */
class ApplyConversationActionType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\ConversationActionType[]
     */
    protected $conversationActions = null;
}
