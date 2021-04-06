<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetUserConfigurationResponseMessageType
 *
 *
 * XSD Type: GetUserConfigurationResponseMessageType
 *
 * @method \Tingo\ews\API\Type\UserConfigurationType getUserConfiguration()
 * @method GetUserConfigurationResponseMessageType setUserConfiguration(\Tingo\ews\API\Type\UserConfigurationType $userConfiguration)
 */
class GetUserConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\UserConfigurationType
     */
    protected $userConfiguration = null;
}
