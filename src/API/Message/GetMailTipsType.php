<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetMailTipsType
 *
 *
 * XSD Type: GetMailTipsType
 *
 * @method \Tingo\ews\API\Type\EmailAddressType getSendingAs()
 * @method GetMailTipsType setSendingAs(\Tingo\ews\API\Type\EmailAddressType $sendingAs)
 * @method GetMailTipsType addRecipients(\Tingo\ews\API\Type\EmailAddressType $recipients)
 * @method \Tingo\ews\API\Type\EmailAddressType[] getRecipients()
 * @method GetMailTipsType setRecipients(array $recipients)
 * @method GetMailTipsType addMailTipsRequested(string $mailTipsRequested)
 * @method string[] getMailTipsRequested()
 * @method GetMailTipsType setMailTipsRequested(array $mailTipsRequested)
 */
class GetMailTipsType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType
     */
    protected $sendingAs = null;

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType[]
     */
    protected $recipients = null;

    /**
     * @var string[]
     */
    protected $mailTipsRequested = null;
}
