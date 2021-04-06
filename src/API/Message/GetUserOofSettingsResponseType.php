<?php

namespace Tingo\ews\API\Message;

use Tingo\ews\API\Message;

/**
 * Class representing GetUserOofSettingsResponseType
 *
 *
 * XSD Type: GetUserOofSettingsResponse
 *
 * @method ResponseMessageType getResponseMessage()
 * @method GetUserOofSettingsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method \Tingo\ews\API\Type\OofSettings getOofSettings()
 * @method GetUserOofSettingsResponseType setOofSettings(\Tingo\ews\API\Type\OofSettings $oofSettings)
 * @method string getAllowExternalOof()
 * @method GetUserOofSettingsResponseType setAllowExternalOof(string $allowExternalOof)
 */
class GetUserOofSettingsResponseType extends Message
{

    /**
     * @var \Tingo\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \Tingo\ews\API\Type\OofSettings
     */
    protected $oofSettings = null;

    /**
     * @var string
     */
    protected $allowExternalOof = null;
}
