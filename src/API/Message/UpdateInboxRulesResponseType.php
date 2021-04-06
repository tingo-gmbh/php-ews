<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing UpdateInboxRulesResponseType
 *
 *
 * XSD Type: UpdateInboxRulesResponseType
 *
 * @method UpdateInboxRulesResponseType addRuleOperationErrors(\Tingo\ews\API\Type\RuleOperationErrorType $ruleOperationErrors)
 * @method \Tingo\ews\API\Type\RuleOperationErrorType[] getRuleOperationErrors()
 * @method UpdateInboxRulesResponseType setRuleOperationErrors(array $ruleOperationErrors)
 */
class UpdateInboxRulesResponseType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\RuleOperationErrorType[]
     */
    protected $ruleOperationErrors = null;
}
