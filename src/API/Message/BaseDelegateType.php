<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing BaseDelegateType
 *
 *
 * XSD Type: BaseDelegateType
 *
 * @method \Tingo\ews\API\Type\EmailAddressType getMailbox()
 * @method BaseDelegateType setMailbox(\Tingo\ews\API\Type\EmailAddressType $mailbox)
 */
class BaseDelegateType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
