<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetUserAvailabilityRequestType
 *
 *
 * XSD Type: GetUserAvailabilityRequestType
 *
 * @method \Tingo\ews\API\Type\TimeZone getTimeZone()
 * @method GetUserAvailabilityRequestType setTimeZone(\Tingo\ews\API\Type\TimeZone $timeZone)
 * @method GetUserAvailabilityRequestType addMailboxDataArray(\Tingo\ews\API\Type\MailboxDataType $mailboxDataArray)
 * @method \Tingo\ews\API\Type\MailboxDataType[] getMailboxDataArray()
 * @method GetUserAvailabilityRequestType setMailboxDataArray(array $mailboxDataArray)
 * @method \Tingo\ews\API\Type\FreeBusyViewOptions getFreeBusyViewOptions()
 * @method GetUserAvailabilityRequestType setFreeBusyViewOptions(\Tingo\ews\API\Type\FreeBusyViewOptions $freeBusyViewOptions)
 * @method \Tingo\ews\API\Type\SuggestionsViewOptions getSuggestionsViewOptions()
 * @method GetUserAvailabilityRequestType setSuggestionsViewOptions(\Tingo\ews\API\Type\SuggestionsViewOptions $suggestionsViewOptions)
 */
class GetUserAvailabilityRequestType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\TimeZone
     */
    protected $timeZone = null;

    /**
     * @var \Tingo\ews\API\Type\MailboxDataType[]
     */
    protected $mailboxDataArray = null;

    /**
     * @var \Tingo\ews\API\Type\FreeBusyViewOptions
     */
    protected $freeBusyViewOptions = null;

    /**
     * @var \Tingo\ews\API\Type\SuggestionsViewOptions
     */
    protected $suggestionsViewOptions = null;
}
