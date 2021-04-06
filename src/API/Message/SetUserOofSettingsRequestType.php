<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing SetUserOofSettingsRequestType
 *
 *
 * XSD Type: SetUserOofSettingsRequest
 *
 * @method \Tingo\ews\API\Type\EmailAddressType getMailbox()
 * @method SetUserOofSettingsRequestType setMailbox(\Tingo\ews\API\Type\EmailAddressType $mailbox)
 * @method \Tingo\ews\API\Type\UserOofSettings getUserOofSettings()
 * @method SetUserOofSettingsRequestType setUserOofSettings(\Tingo\ews\API\Type\UserOofSettings $userOofSettings)
 */
class SetUserOofSettingsRequestType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType
     */
    protected $mailbox = null;

    /**
     * @var \Tingo\ews\API\Type\UserOofSettings
     */
    protected $userOofSettings = null;
}
