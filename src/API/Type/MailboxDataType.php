<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing MailboxDataType
 *
 *
 * XSD Type: MailboxData
 *
 * @method EmailAddressType getEmail()
 * @method MailboxDataType setEmail(EmailAddressType $email)
 * @method string getAttendeeType()
 * @method MailboxDataType setAttendeeType(string $attendeeType)
 * @method boolean isExcludeConflicts()
 * @method boolean getExcludeConflicts()
 * @method MailboxDataType setExcludeConflicts(boolean $excludeConflicts)
 */
class MailboxDataType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType
     */
    protected $email = null;

    /**
     * @var string
     */
    protected $attendeeType = null;

    /**
     * @var boolean
     */
    protected $excludeConflicts = null;
}
