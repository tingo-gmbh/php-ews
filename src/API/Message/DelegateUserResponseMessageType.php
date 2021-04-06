<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing DelegateUserResponseMessageType
 *
 *
 * XSD Type: DelegateUserResponseMessageType
 *
 * @method \Tingo\ews\API\Type\DelegateUserType getDelegateUser()
 * @method DelegateUserResponseMessageType setDelegateUser(\Tingo\ews\API\Type\DelegateUserType $delegateUser)
 */
class DelegateUserResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\DelegateUserType
     */
    protected $delegateUser = null;
}
