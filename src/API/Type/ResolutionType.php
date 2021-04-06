<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing ResolutionType
 *
 *
 * XSD Type: ResolutionType
 *
 * @method EmailAddressType getMailbox()
 * @method ResolutionType setMailbox(EmailAddressType $mailbox)
 * @method ContactItemType getContact()
 * @method ResolutionType setContact(ContactItemType $contact)
 */
class ResolutionType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @var \Tingo\ews\API\Type\ContactItemType
     */
    protected $contact = null;
}
