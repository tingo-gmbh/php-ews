<?php
/**
 * Contains \Tingo\ews\API\Enumeration\SensitivityChoicesType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

/**
 * Class representing SensitivityChoicesType
 *
 *
 * XSD Type: SensitivityChoicesType
 */
class SensitivityChoicesType extends Enumeration
{

    const CONFIDENTIAL = 'Confidential';

    const NORMAL = 'Normal';

    const PERSONAL = 'Personal';

    const PRIVATE_ITEM = 'Private';

    const PRIVATE_CONSTANT = 'Private';
}
