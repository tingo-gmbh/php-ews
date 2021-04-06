<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing ExpandDLType
 *
 *
 * XSD Type: ExpandDLType
 *
 * @method \Tingo\ews\API\Type\EmailAddressType getMailbox()
 * @method ExpandDLType setMailbox(\Tingo\ews\API\Type\EmailAddressType $mailbox)
 */
class ExpandDLType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
