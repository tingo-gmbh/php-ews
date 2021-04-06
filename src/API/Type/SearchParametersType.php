<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing SearchParametersType
 *
 *
 * XSD Type: SearchParametersType
 *
 * @method string getTraversal()
 * @method SearchParametersType setTraversal(string $traversal)
 * @method RestrictionType getRestriction()
 * @method SearchParametersType setRestriction(RestrictionType $restriction)
 * @method NonEmptyArrayOfBaseFolderIdsType getBaseFolderIds()
 * @method SearchParametersType setBaseFolderIds(NonEmptyArrayOfBaseFolderIdsType $baseFolderIds)
 */
class SearchParametersType extends Type
{

    /**
     * @var string
     */
    protected $traversal = null;

    /**
     * @var \Tingo\ews\API\Type\RestrictionType
     */
    protected $restriction = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $baseFolderIds = null;
}
