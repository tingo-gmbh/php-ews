<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing ExchangeImpersonationType
 *
 *
 * XSD Type: ExchangeImpersonationType
 *
 * @method ConnectingSIDType getConnectingSID()
 * @method ExchangeImpersonationType setConnectingSID(ConnectingSIDType $connectingSID)
 */
class ExchangeImpersonationType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\ConnectingSIDType
     */
    protected $connectingSID = null;

    public static function fromEmailAddress($emailAddress)
    {
        $impersonation = new self();
        $connectingSID = new ConnectingSIDType();
        $connectingSID->setPrimarySmtpAddress($emailAddress);

        $impersonation->setConnectingSID($connectingSID);
        return $impersonation;
    }
}
