<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing DeleteUserConfigurationType
 *
 *
 * XSD Type: DeleteUserConfigurationType
 *
 * @method \Tingo\ews\API\Type\UserConfigurationNameType getUserConfigurationName()
 * @method DeleteUserConfigurationType setUserConfigurationName(\Tingo\ews\API\Type\UserConfigurationNameType $userConfigurationName)
 */
class DeleteUserConfigurationType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\UserConfigurationNameType
     */
    protected $userConfigurationName = null;
}
