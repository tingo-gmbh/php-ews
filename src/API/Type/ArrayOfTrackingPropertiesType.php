<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing ArrayOfTrackingPropertiesType
 *
 *
 * XSD Type: ArrayOfTrackingPropertiesType
 *
 * @method ArrayOfTrackingPropertiesType addTrackingPropertyType(TrackingPropertyType $trackingPropertyType)
 * @method TrackingPropertyType[] getTrackingPropertyType()
 * @method ArrayOfTrackingPropertiesType setTrackingPropertyType(array $trackingPropertyType)
 */
class ArrayOfTrackingPropertiesType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\TrackingPropertyType[]
     */
    protected $trackingPropertyType = null;
}
