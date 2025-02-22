<?php

namespace Tingo\ews\API\Type;

/**
 * Class representing NotType
 *
 *
 * XSD Type: NotType
 *
 * @method NotType addContains(Contains $contains)
 * @method Contains[] getContains()
 * @method NotType setContains(array $contains)
 * @method NotType addExcludes(Excludes $excludes)
 * @method Excludes[] getExcludes()
 * @method NotType setExcludes(array $excludes)
 * @method NotType addExists(Exists $exists)
 * @method Exists[] getExists()
 * @method NotType setExists(array $exists)
 * @method NotType addIsEqualTo(IsEqualTo $isEqualTo)
 * @method IsEqualTo[] getIsEqualTo()
 * @method NotType setIsEqualTo(array $isEqualTo)
 * @method NotType addIsNotEqualTo(IsNotEqualTo $isNotEqualTo)
 * @method IsNotEqualTo[] getIsNotEqualTo()
 * @method NotType setIsNotEqualTo(array $isNotEqualTo)
 * @method NotType addIsGreaterThan(IsGreaterThan $isGreaterThan)
 * @method IsGreaterThan[] getIsGreaterThan()
 * @method NotType setIsGreaterThan(array $isGreaterThan)
 * @method NotType addIsGreaterThanOrEqualTo(IsGreaterThanOrEqualTo $isGreaterThanOrEqualTo)
 * @method IsGreaterThanOrEqualTo[] getIsGreaterThanOrEqualTo()
 * @method NotType setIsGreaterThanOrEqualTo(array $isGreaterThanOrEqualTo)
 * @method NotType addIsLessThan(IsLessThan $isLessThan)
 * @method IsLessThan[] getIsLessThan()
 * @method NotType setIsLessThan(array $isLessThan)
 * @method NotType addIsLessThanOrEqualTo(IsLessThanOrEqualTo $isLessThanOrEqualTo)
 * @method IsLessThanOrEqualTo[] getIsLessThanOrEqualTo()
 * @method NotType setIsLessThanOrEqualTo(array $isLessThanOrEqualTo)
 * @method NotType addAnd(AndElement $and)
 * @method AndElement[] getAnd()
 * @method NotType setAnd(array $and)
 * @method NotType addNot(Not $not)
 * @method Not[] getNot()
 * @method NotType setNot(array $not)
 * @method NotType addOr(OrElement $or)
 * @method OrElement[] getOr()
 * @method NotType setOr(array $or)
 */
class NotType extends SearchExpressionType
{

    /**
     * @var \Tingo\ews\API\Type\Contains[]
     */
    protected $contains = null;

    /**
     * @var \Tingo\ews\API\Type\Excludes[]
     */
    protected $excludes = null;

    /**
     * @var \Tingo\ews\API\Type\Exists[]
     */
    protected $exists = null;

    /**
     * @var \Tingo\ews\API\Type\IsEqualTo[]
     */
    protected $isEqualTo = null;

    /**
     * @var \Tingo\ews\API\Type\IsNotEqualTo[]
     */
    protected $isNotEqualTo = null;

    /**
     * @var \Tingo\ews\API\Type\IsGreaterThan[]
     */
    protected $isGreaterThan = null;

    /**
     * @var \Tingo\ews\API\Type\IsGreaterThanOrEqualTo[]
     */
    protected $isGreaterThanOrEqualTo = null;

    /**
     * @var \Tingo\ews\API\Type\IsLessThan[]
     */
    protected $isLessThan = null;

    /**
     * @var \Tingo\ews\API\Type\IsLessThanOrEqualTo[]
     */
    protected $isLessThanOrEqualTo = null;

    /**
     * @var \Tingo\ews\API\Type\AndElement[]
     */
    protected $and = null;

    /**
     * @var \Tingo\ews\API\Type\Not[]
     */
    protected $not = null;

    /**
     * @var \Tingo\ews\API\Type\OrElement[]
     */
    protected $or = null;
}
