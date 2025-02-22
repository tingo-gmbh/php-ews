<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing ProtectionRuleAndType
 *
 *
 * XSD Type: ProtectionRuleAndType
 *
 * @method ProtectionRuleAndType addAllInternal(string $allInternal)
 * @method string[] getAllInternal()
 * @method ProtectionRuleAndType setAllInternal(array $allInternal)
 * @method ProtectionRuleAndType addAnd(ProtectionRuleAndType $and)
 * @method ProtectionRuleAndType[] getAnd()
 * @method ProtectionRuleAndType setAnd(array $and)
 * @method ProtectionRuleAndType addRecipientIs(string $recipientIs)
 * @method string[] getRecipientIs()
 * @method ProtectionRuleAndType setRecipientIs(array $recipientIs)
 * @method ProtectionRuleAndType addSenderDepartments(string $senderDepartments)
 * @method string[] getSenderDepartments()
 * @method ProtectionRuleAndType setSenderDepartments(array $senderDepartments)
 * @method ProtectionRuleAndType addTrue(string $true)
 * @method string[] getTrue()
 * @method ProtectionRuleAndType setTrue(array $true)
 */
class ProtectionRuleAndType extends Type
{

    /**
     * @var string[]
     */
    protected $allInternal = null;

    /**
     * @var \Tingo\ews\API\Type\ProtectionRuleAndType[]
     */
    protected $and = null;

    /**
     * @var string[]
     */
    protected $recipientIs = null;

    /**
     * @var string[]
     */
    protected $senderDepartments = null;

    /**
     * @var string[]
     */
    protected $true = null;
}
