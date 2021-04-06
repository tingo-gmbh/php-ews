<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing AttendeeType
 *
 *
 * XSD Type: AttendeeType
 *
 * @method EmailAddressType getMailbox()
 * @method AttendeeType setMailbox(EmailAddressType $mailbox)
 * @method string getResponseType()
 * @method AttendeeType setResponseType(string $responseType)
 * @method \DateTime getLastResponseTime()
 * @method AttendeeType setLastResponseTime(\DateTime $lastResponseTime)
 */
class AttendeeType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @var string
     */
    protected $responseType = null;

    /**
     * @var \DateTime
     */
    protected $lastResponseTime = null;

    protected $_typeMap = array(
        'lastResponseTime' => 'dateTime',
    );
}
