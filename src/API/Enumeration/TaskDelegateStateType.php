<?php
/**
 * Contains \Tingo\ews\API\Enumeration\TaskDelegateStateType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

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
