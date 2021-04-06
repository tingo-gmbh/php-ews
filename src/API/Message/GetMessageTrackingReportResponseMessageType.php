<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: GetMessageTrackingReportResponseMessageType
 *
 * @method \Tingo\ews\API\Type\MessageTrackingReportType getMessageTrackingReport()
 * @method GetMessageTrackingReportResponseMessageType setMessageTrackingReport(\Tingo\ews\API\Type\MessageTrackingReportType $messageTrackingReport)
 * @method GetMessageTrackingReportResponseMessageType addDiagnostics(string $diagnostics)
 * @method string[] getDiagnostics()
 * @method GetMessageTrackingReportResponseMessageType setDiagnostics(array $diagnostics)
 * @method GetMessageTrackingReportResponseMessageType addErrors(\Tingo\ews\API\Type\ArrayOfTrackingPropertiesType $errors)
 * @method \Tingo\ews\API\Type\ArrayOfTrackingPropertiesType[] getErrors()
 * @method GetMessageTrackingReportResponseMessageType setErrors(array $errors)
 * @method GetMessageTrackingReportResponseMessageType addProperties(\Tingo\ews\API\Type\TrackingPropertyType $properties)
 * @method \Tingo\ews\API\Type\TrackingPropertyType[] getProperties()
 * @method GetMessageTrackingReportResponseMessageType setProperties(array $properties)
 */
class GetMessageTrackingReportResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\MessageTrackingReportType
     */
    protected $messageTrackingReport = null;

    /**
     * @var string[]
     */
    protected $diagnostics = null;

    /**
     * @var \Tingo\ews\API\Type\ArrayOfTrackingPropertiesType[]
     */
    protected $errors = null;

    /**
     * @var \Tingo\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;
}
