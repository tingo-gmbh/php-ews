<?php

namespace garethp\ews\API\Message;

/**
 * Class representing GetServiceConfigurationType
 *
 *
 * XSD Type: GetServiceConfigurationType
 *
 * @method \garethp\ews\API\Type\EmailAddressType getActingAs()
 * @method GetServiceConfigurationType setActingAs(\garethp\ews\API\Type\EmailAddressType $actingAs)
 * @method GetServiceConfigurationType addRequestedConfiguration(\garethp\ews\API\Type\ServiceConfigurationType $requestedConfiguration)
 * @method \garethp\ews\API\Type\ServiceConfigurationType[] getRequestedConfiguration()
 * @method GetServiceConfigurationType setRequestedConfiguration(array $requestedConfiguration)
 */
class GetServiceConfigurationType extends BaseRequestType
{

    /**
     * @var \garethp\ews\API\Type\EmailAddressType
     */
    protected $actingAs = null;

    /**
     * @var \garethp\ews\API\Type\ServiceConfigurationType[]
     */
    protected $requestedConfiguration = null;
}
