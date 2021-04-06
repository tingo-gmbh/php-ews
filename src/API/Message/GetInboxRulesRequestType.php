<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetInboxRulesRequestType
 *
 *
 * XSD Type: GetInboxRulesRequestType
 *
 * @method string getMailboxSmtpAddress()
 * @method GetInboxRulesRequestType setMailboxSmtpAddress(string $mailboxSmtpAddress)
 */
class GetInboxRulesRequestType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $mailboxSmtpAddress = null;
}
