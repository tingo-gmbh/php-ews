<?php

namespace Tingo\ews\API\Type;

/**
 * Class representing ContactsFolderType
 *
 *
 * XSD Type: ContactsFolderType
 *
 * @method string getSharingEffectiveRights()
 * @method ContactsFolderType setSharingEffectiveRights(string $sharingEffectiveRights)
 * @method PermissionSetType getPermissionSet()
 * @method ContactsFolderType setPermissionSet(PermissionSetType $permissionSet)
 */
class ContactsFolderType extends BaseFolderType
{

    /**
     * @var string
     */
    protected $sharingEffectiveRights = null;

    /**
     * @var \Tingo\ews\API\Type\PermissionSetType
     */
    protected $permissionSet = null;
}
