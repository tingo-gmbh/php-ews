<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\TaskDelegateStateType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing TaskDelegateStateType
 *
 *
 * XSD Type: TaskDelegateStateType
 */
class TaskDelegateStateType extends Enumeration
{

    const ACCEPTED = 'Accepted';

    const DECLINED = 'Declined';

    const MAX = 'Max';

    const NO_MATCH = 'NoMatch';

    const OWN_NEW = 'OwnNew';

    const OWNED = 'Owned';
}
