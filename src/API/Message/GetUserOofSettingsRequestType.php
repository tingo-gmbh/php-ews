<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetUserOofSettingsRequestType
 *
 *
 * XSD Type: GetUserOofSettingsRequest
 *
 * @method \Tingo\ews\API\Type\EmailAddressType getMailbox()
 * @method GetUserOofSettingsRequestType setMailbox(\Tingo\ews\API\Type\EmailAddressType $mailbox)
 */
class GetUserOofSettingsRequestType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
