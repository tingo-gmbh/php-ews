<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing ResolveNamesResponseMessageType
 *
 *
 * XSD Type: ResolveNamesResponseMessageType
 *
 * @method \Tingo\ews\API\Type\ArrayOfResolutionType getResolutionSet()
 * @method ResolveNamesResponseMessageType setResolutionSet(\Tingo\ews\API\Type\ArrayOfResolutionType $resolutionSet)
 */
class ResolveNamesResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\ArrayOfResolutionType
     */
    protected $resolutionSet = null;
}
