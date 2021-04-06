<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing UpdateDelegateType
 *
 *
 * XSD Type: UpdateDelegateType
 *
 * @method UpdateDelegateType addDelegateUsers(\Tingo\ews\API\Type\DelegateUserType $delegateUsers)
 * @method \Tingo\ews\API\Type\DelegateUserType[] getDelegateUsers()
 * @method UpdateDelegateType setDelegateUsers(array $delegateUsers)
 * @method string getDeliverMeetingRequests()
 * @method UpdateDelegateType setDeliverMeetingRequests(string $deliverMeetingRequests)
 */
class UpdateDelegateType extends BaseDelegateType
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
