<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing ArrayOfAttendeeConflictDataType
 *
 *
 * XSD Type: ArrayOfAttendeeConflictData
 *
 * @method ArrayOfAttendeeConflictDataType addUnknownAttendeeConflictData(UnknownAttendeeConflictDataType $unknownAttendeeConflictData)
 * @method UnknownAttendeeConflictDataType[] getUnknownAttendeeConflictData()
 * @method ArrayOfAttendeeConflictDataType setUnknownAttendeeConflictData(array $unknownAttendeeConflictData)
 * @method ArrayOfAttendeeConflictDataType addIndividualAttendeeConflictData(IndividualAttendeeConflictDataType $individualAttendeeConflictData)
 * @method IndividualAttendeeConflictDataType[] getIndividualAttendeeConflictData()
 * @method ArrayOfAttendeeConflictDataType setIndividualAttendeeConflictData(array $individualAttendeeConflictData)
 * @method ArrayOfAttendeeConflictDataType addTooBigGroupAttendeeConflictData(TooBigGroupAttendeeConflictDataType $tooBigGroupAttendeeConflictData)
 * @method TooBigGroupAttendeeConflictDataType[] getTooBigGroupAttendeeConflictData()
 * @method ArrayOfAttendeeConflictDataType setTooBigGroupAttendeeConflictData(array $tooBigGroupAttendeeConflictData)
 * @method ArrayOfAttendeeConflictDataType addGroupAttendeeConflictData(GroupAttendeeConflictDataType $groupAttendeeConflictData)
 * @method GroupAttendeeConflictDataType[] getGroupAttendeeConflictData()
 * @method ArrayOfAttendeeConflictDataType setGroupAttendeeConflictData(array $groupAttendeeConflictData)
 */
class ArrayOfAttendeeConflictDataType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\UnknownAttendeeConflictDataType[]
     */
    protected $unknownAttendeeConflictData = null;

    /**
     * @var \Tingo\ews\API\Type\IndividualAttendeeConflictDataType[]
     */
    protected $individualAttendeeConflictData = null;

    /**
     * @var \Tingo\ews\API\Type\TooBigGroupAttendeeConflictDataType[]
     */
    protected $tooBigGroupAttendeeConflictData = null;

    /**
     * @var \Tingo\ews\API\Type\GroupAttendeeConflictDataType[]
     */
    protected $groupAttendeeConflictData = null;
}
