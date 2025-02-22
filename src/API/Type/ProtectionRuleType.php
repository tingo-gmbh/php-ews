<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing ProtectionRuleType
 *
 *
 * XSD Type: ProtectionRuleType
 *
 * @method string getName()
 * @method ProtectionRuleType setName(string $name)
 * @method boolean isUserOverridable()
 * @method boolean getUserOverridable()
 * @method ProtectionRuleType setUserOverridable(boolean $userOverridable)
 * @method integer getPriority()
 * @method ProtectionRuleType setPriority(integer $priority)
 * @method ProtectionRuleConditionType getCondition()
 * @method ProtectionRuleType setCondition(ProtectionRuleConditionType $condition)
 * @method ProtectionRuleActionType getAction()
 * @method ProtectionRuleType setAction(ProtectionRuleActionType $action)
 */
class ProtectionRuleType extends Type
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var boolean
     */
    protected $userOverridable = null;

    /**
     * @var integer
     */
    protected $priority = null;

    /**
     * @var \Tingo\ews\API\Type\ProtectionRuleConditionType
     */
    protected $condition = null;

    /**
     * @var \Tingo\ews\API\Type\ProtectionRuleActionType
     */
    protected $action = null;
}
