<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\CreateActionType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

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
