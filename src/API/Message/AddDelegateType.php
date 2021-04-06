<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing AddDelegateType
 *
 *
 * XSD Type: AddDelegateType
 *
 * @method AddDelegateType addDelegateUsers(\Tingo\ews\API\Type\DelegateUserType $delegateUsers)
 * @method \Tingo\ews\API\Type\DelegateUserType[] getDelegateUsers()
 * @method AddDelegateType setDelegateUsers(array $delegateUsers)
 * @method string getDeliverMeetingRequests()
 * @method AddDelegateType setDeliverMeetingRequests(string $deliverMeetingRequests)
 */
class AddDelegateType extends BaseDelegateType
{

    /**
     * @var \Tingo\ews\API\Type\DelegateUserType[]
     */
    protected $delegateUsers = null;

    /**
     * @var string
     */
    protected $deliverMeetingRequests = null;
}
