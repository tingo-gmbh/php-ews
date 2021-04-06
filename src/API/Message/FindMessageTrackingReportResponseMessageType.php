<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing FindMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: FindMessageTrackingReportResponseMessageType
 *
 * @method FindMessageTrackingReportResponseMessageType addDiagnostics(string $diagnostics)
 * @method string[] getDiagnostics()
 * @method FindMessageTrackingReportResponseMessageType setDiagnostics(array $diagnostics)
 * @method FindMessageTrackingReportResponseMessageType addMessageTrackingSearchResults(\Tingo\ews\API\Type\FindMessageTrackingSearchResultType $messageTrackingSearchResults)
 * @method \Tingo\ews\API\Type\FindMessageTrackingSearchResultType[] getMessageTrackingSearchResults()
 * @method FindMessageTrackingReportResponseMessageType setMessageTrackingSearchResults(array $messageTrackingSearchResults)
 * @method string getExecutedSearchScope()
 * @method FindMessageTrackingReportResponseMessageType setExecutedSearchScope(string $executedSearchScope)
 * @method FindMessageTrackingReportResponseMessageType addErrors(\Tingo\ews\API\Type\ArrayOfTrackingPropertiesType $errors)
 * @method \Tingo\ews\API\Type\ArrayOfTrackingPropertiesType[] getErrors()
 * @method FindMessageTrackingReportResponseMessageType setErrors(array $errors)
 * @method FindMessageTrackingReportResponseMessageType addProperties(\Tingo\ews\API\Type\TrackingPropertyType $properties)
 * @method \Tingo\ews\API\Type\TrackingPropertyType[] getProperties()
 * @method FindMessageTrackingReportResponseMessageType setProperties(array $properties)
 */
class FindMessageTrackingReportResponseMessageType extends ResponseMessageType
{

    /**
     * @var string[]
     */
    protected $diagnostics = null;

    /**
     * @var \Tingo\ews\API\Type\FindMessageTrackingSearchResultType[]
     */
    protected $messageTrackingSearchResults = null;

    /**
     * @var string
     */
    protected $executedSearchScope = null;

    /**
     * @var \Tingo\ews\API\Type\ArrayOfTrackingPropertiesType[]
     */
    protected $errors = null;

    /**
     * @var \Tingo\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;
}
