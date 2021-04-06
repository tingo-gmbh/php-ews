<?php

namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

/**
 * Class representing AggregateType
 *
 * This max/min evaluation is applied to the field specified within the group by
 *  instance for EACH item within that group. This determines which item from each
 * group
 *  is to be selected as the representative for that group.
 * XSD Type: AggregateType
 */
class AggregateType extends Enumeration
{

    const MINIMUM = 'Minimum';

    const MAXIMUM = 'Maximum';
}
