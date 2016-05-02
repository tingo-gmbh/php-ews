<?php
/**
 * Contains \garethp\ews\API\Enumeration\SensitivityChoicesType.
 */

namespace garethp\ews\API\Enumeration;

use \garethp\ews\API\Enumeration;

/**
 * Indicates the sensitivity level of an item.
 *
 * @package php-ews\Enumeration
 */
class SensitivityChoicesType extends Enumeration
{
    /**
     * Indicates that the item is confidential.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONFIDENTIAL = 'Confidential';

    /**
     * Indicates that the item has a normal sensitivity.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NORMAL = 'Normal';

    /**
     * Indicates that the item is personal.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PERSONAL = 'Personal';

    /**
     * Indicates that the item is private.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PRIVATE_ITEM = 'Private';
}
