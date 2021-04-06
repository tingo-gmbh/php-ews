<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing UpdateInboxRulesRequestType
 *
 *
 * XSD Type: UpdateInboxRulesRequestType
 *
 * @method string getMailboxSmtpAddress()
 * @method UpdateInboxRulesRequestType setMailboxSmtpAddress(string $mailboxSmtpAddress)
 * @method boolean isRemoveOutlookRuleBlob()
 * @method boolean getRemoveOutlookRuleBlob()
 * @method UpdateInboxRulesRequestType setRemoveOutlookRuleBlob(boolean $removeOutlookRuleBlob)
 * @method \Tingo\ews\API\Type\ArrayOfRuleOperationsType getOperations()
 * @method UpdateInboxRulesRequestType setOperations(\Tingo\ews\API\Type\ArrayOfRuleOperationsType $operations)
 */
class UpdateInboxRulesRequestType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $mailboxSmtpAddress = null;

    /**
     * @var boolean
     */
    protected $removeOutlookRuleBlob = null;

    /**
     * @var \Tingo\ews\API\Type\ArrayOfRuleOperationsType
     */
    protected $operations = null;
}
