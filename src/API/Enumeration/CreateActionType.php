<?php
/**
 * Contains \Tingo\ews\API\Enumeration\CreateActionType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

/**
 * Class representing CreateActionType
 *
 *
 * XSD Type: CreateActionType
 */
class CreateActionType extends Enumeration
{

    const CREATE = 'CreateNew';

    const UPDATE = 'Update';

    const UPDATE_OR_CREATE = 'UpdateOrCreate';

    const CREATE_NEW = 'CreateNew';
}
