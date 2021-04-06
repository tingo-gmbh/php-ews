<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetServiceConfigurationType
 *
 *
 * XSD Type: GetServiceConfigurationType
 *
 * @method \Tingo\ews\API\Type\EmailAddressType getActingAs()
 * @method GetServiceConfigurationType setActingAs(\Tingo\ews\API\Type\EmailAddressType $actingAs)
 * @method GetServiceConfigurationType addRequestedConfiguration(\Tingo\ews\API\Enumeration\ServiceConfigurationType $requestedConfiguration)
 * @method \Tingo\ews\API\Enumeration\ServiceConfigurationType[] getRequestedConfiguration()
 * @method GetServiceConfigurationType setRequestedConfiguration(array $requestedConfiguration)
 */
class GetServiceConfigurationType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType
     */
    protected $actingAs = null;

    /**
     * @var \Tingo\ews\API\Enumeration\ServiceConfigurationType[]
     */
    protected $requestedConfiguration = null;
}
