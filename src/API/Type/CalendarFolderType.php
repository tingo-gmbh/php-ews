<?php

namespace Tingo\ews\API\Type;

/**
 * Class representing CalendarFolderType
 *
 *
 * XSD Type: CalendarFolderType
 *
 * @method string getSharingEffectiveRights()
 * @method CalendarFolderType setSharingEffectiveRights(string $sharingEffectiveRights)
 * @method CalendarPermissionSetType getPermissionSet()
 * @method CalendarFolderType setPermissionSet(CalendarPermissionSetType $permissionSet)
 */
class CalendarFolderType extends BaseFolderType
{

    /**
     * @var string
     */
    protected $sharingEffectiveRights = null;

    /**
     * @var \Tingo\ews\API\Type\CalendarPermissionSetType
     */
    protected $permissionSet = null;
}
