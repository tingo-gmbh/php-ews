<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetDelegateType
 *
 *
 * XSD Type: GetDelegateType
 *
 * @method boolean isIncludePermissions()
 * @method boolean getIncludePermissions()
 * @method GetDelegateType setIncludePermissions(boolean $includePermissions)
 * @method GetDelegateType addUserIds(\Tingo\ews\API\Type\UserIdType $userIds)
 * @method \Tingo\ews\API\Type\UserIdType[] getUserIds()
 * @method GetDelegateType setUserIds(array $userIds)
 */
class GetDelegateType extends BaseDelegateType
{

    /**
     * @var boolean
     */
    protected $includePermissions = null;

    /**
     * @var \Tingo\ews\API\Type\UserIdType[]
     */
    protected $userIds = null;
}
