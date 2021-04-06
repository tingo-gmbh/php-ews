<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * Response message type for the FindMailboxStatisticsByKeywords web method.
 * XSD Type: FindMailboxStatisticsByKeywordsResponseMessageType
 *
 * @method \Tingo\ews\API\Type\MailboxStatisticsSearchResultType getMailboxStatisticsSearchResult()
 * @method FindMailboxStatisticsByKeywordsResponseMessageType setMailboxStatisticsSearchResult(\Tingo\ews\API\Type\MailboxStatisticsSearchResultType $mailboxStatisticsSearchResult)
 */
class FindMailboxStatisticsByKeywordsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\MailboxStatisticsSearchResultType
     */
    protected $mailboxStatisticsSearchResult = null;
}
