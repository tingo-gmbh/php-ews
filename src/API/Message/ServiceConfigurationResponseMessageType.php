<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing ServiceConfigurationResponseMessageType
 *
 *
 * XSD Type: ServiceConfigurationResponseMessageType
 *
 * @method \Tingo\ews\API\Type\MailTipsServiceConfigurationType getMailTipsConfiguration()
 * @method ServiceConfigurationResponseMessageType setMailTipsConfiguration(\Tingo\ews\API\Type\MailTipsServiceConfigurationType $mailTipsConfiguration)
 * @method \Tingo\ews\API\Type\UnifiedMessageServiceConfigurationType getUnifiedMessagingConfiguration()
 * @method ServiceConfigurationResponseMessageType setUnifiedMessagingConfiguration(\Tingo\ews\API\Type\UnifiedMessageServiceConfigurationType $unifiedMessagingConfiguration)
 * @method \Tingo\ews\API\Type\ProtectionRulesServiceConfigurationType getProtectionRulesConfiguration()
 * @method ServiceConfigurationResponseMessageType setProtectionRulesConfiguration(\Tingo\ews\API\Type\ProtectionRulesServiceConfigurationType $protectionRulesConfiguration)
 */
class ServiceConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\MailTipsServiceConfigurationType
     */
    protected $mailTipsConfiguration = null;

    /**
     * @var \Tingo\ews\API\Type\UnifiedMessageServiceConfigurationType
     */
    protected $unifiedMessagingConfiguration = null;

    /**
     * @var \Tingo\ews\API\Type\ProtectionRulesServiceConfigurationType
     */
    protected $protectionRulesConfiguration = null;
}
