<?php
/**
 * Contains \Tingo\ews\API\Enumeration\PermissionLevelType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

/**
 * Class representing PermissionLevelType
 *
 *
 * XSD Type: PermissionLevelType
 */
class PermissionLevelType extends Enumeration
{

    const AUTHOR = 'Author';

    const CONTRIBUTOR = 'Contributor';

    const CUSTOM = 'Custom';

    const EDITOR = 'Editor';

    const NON_EDITING_AUTHOR = 'NoneditingAuthor';

    const NONE = 'None';

    const OWNER = 'Owner';

    const PUBLISHING_AUTHOR = 'PublishingAuthor';

    const PUBLISHING_EDITOR = 'PublishingEditor';

    const REVIEWER = 'Reviewer';

    const NONEDITING_AUTHOR = 'NoneditingAuthor';
}
