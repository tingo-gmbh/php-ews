<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing RulePredicateSizeRangeType
 *
 * Size range type used for the WithinSizeRange rule predicate.
 * XSD Type: RulePredicateSizeRangeType
 *
 * @method integer getMinimumSize()
 * @method RulePredicateSizeRangeType setMinimumSize(integer $minimumSize)
 * @method integer getMaximumSize()
 * @method RulePredicateSizeRangeType setMaximumSize(integer $maximumSize)
 */
class RulePredicateSizeRangeType extends Type
{

    /**
     * @var integer
     */
    protected $minimumSize = null;

    /**
     * @var integer
     */
    protected $maximumSize = null;
}
