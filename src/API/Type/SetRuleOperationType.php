<?php

namespace Tingo\ews\API\Type;

/**
 * Class representing SetRuleOperationType
 *
 *
 * XSD Type: SetRuleOperationType
 *
 * @method RuleType getRule()
 * @method SetRuleOperationType setRule(RuleType $rule)
 */
class SetRuleOperationType extends RuleOperationType
{

    /**
     * @var \Tingo\ews\API\Type\RuleType
     */
    protected $rule = null;
}
