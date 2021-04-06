<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing RemoveDelegateType
 *
 *
 * XSD Type: RemoveDelegateType
 *
 * @method RemoveDelegateType addUserIds(\Tingo\ews\API\Type\UserIdType $userIds)
 * @method \Tingo\ews\API\Type\UserIdType[] getUserIds()
 * @method RemoveDelegateType setUserIds(array $userIds)
 */
class RemoveDelegateType extends BaseDelegateType
{

    /**
     * @var \Tingo\ews\API\Type\UserIdType[]
     */
    protected $userIds = null;
}
