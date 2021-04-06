<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetInboxRulesResponseType
 *
 *
 * XSD Type: GetInboxRulesResponseType
 *
 * @method boolean isOutlookRuleBlobExists()
 * @method boolean getOutlookRuleBlobExists()
 * @method GetInboxRulesResponseType setOutlookRuleBlobExists(boolean $outlookRuleBlobExists)
 * @method GetInboxRulesResponseType addInboxRules(\Tingo\ews\API\Type\RuleType $inboxRules)
 * @method \Tingo\ews\API\Type\RuleType[] getInboxRules()
 * @method GetInboxRulesResponseType setInboxRules(array $inboxRules)
 */
class GetInboxRulesResponseType extends ResponseMessageType
{

    /**
     * @var boolean
     */
    protected $outlookRuleBlobExists = null;

    /**
     * @var \Tingo\ews\API\Type\RuleType[]
     */
    protected $inboxRules = null;
}
