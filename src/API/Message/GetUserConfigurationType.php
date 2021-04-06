<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetUserConfigurationType
 *
 *
 * XSD Type: GetUserConfigurationType
 *
 * @method \Tingo\ews\API\Type\UserConfigurationNameType getUserConfigurationName()
 * @method GetUserConfigurationType setUserConfigurationName(\Tingo\ews\API\Type\UserConfigurationNameType $userConfigurationName)
 * @method GetUserConfigurationType addUserConfigurationProperties(string $userConfigurationProperties)
 * @method string[] getUserConfigurationProperties()
 * @method GetUserConfigurationType setUserConfigurationProperties(array $userConfigurationProperties)
 */
class GetUserConfigurationType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\UserConfigurationNameType
     */
    protected $userConfigurationName = null;

    /**
     * @var string[]
     */
    protected $userConfigurationProperties = null;
}
