<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetMessageTrackingReportRequestType
 *
 *
 * XSD Type: GetMessageTrackingReportRequestType
 *
 * @method string getScope()
 * @method GetMessageTrackingReportRequestType setScope(string $scope)
 * @method string getReportTemplate()
 * @method GetMessageTrackingReportRequestType setReportTemplate(string $reportTemplate)
 * @method \Tingo\ews\API\Type\EmailAddressType getRecipientFilter()
 * @method GetMessageTrackingReportRequestType setRecipientFilter(\Tingo\ews\API\Type\EmailAddressType $recipientFilter)
 * @method string getMessageTrackingReportId()
 * @method GetMessageTrackingReportRequestType setMessageTrackingReportId(string $messageTrackingReportId)
 * @method boolean isReturnQueueEvents()
 * @method boolean getReturnQueueEvents()
 * @method GetMessageTrackingReportRequestType setReturnQueueEvents(boolean $returnQueueEvents)
 * @method string getDiagnosticsLevel()
 * @method GetMessageTrackingReportRequestType setDiagnosticsLevel(string $diagnosticsLevel)
 * @method GetMessageTrackingReportRequestType addProperties(\Tingo\ews\API\Type\TrackingPropertyType $properties)
 * @method \Tingo\ews\API\Type\TrackingPropertyType[] getProperties()
 * @method GetMessageTrackingReportRequestType setProperties(array $properties)
 */
class GetMessageTrackingReportRequestType extends BaseRequestType
{

    /**
     * @var string
     */
    protected $scope = null;

    /**
     * @var string
     */
    protected $reportTemplate = null;

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType
     */
    protected $recipientFilter = null;

    /**
     * @var string
     */
    protected $messageTrackingReportId = null;

    /**
     * @var boolean
     */
    protected $returnQueueEvents = null;

    /**
     * @var string
     */
    protected $diagnosticsLevel = null;

    /**
     * @var \Tingo\ews\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;
}
