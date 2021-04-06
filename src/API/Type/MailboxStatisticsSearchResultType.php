<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing MailboxStatisticsSearchResultType
 *
 * Mailbox statistics search result.
 * XSD Type: MailboxStatisticsSearchResultType
 *
 * @method UserMailboxType getUserMailbox()
 * @method MailboxStatisticsSearchResultType setUserMailbox(UserMailboxType $userMailbox)
 * @method KeywordStatisticsSearchResultType getKeywordStatisticsSearchResult()
 * @method MailboxStatisticsSearchResultType setKeywordStatisticsSearchResult(KeywordStatisticsSearchResultType $keywordStatisticsSearchResult)
 */
class MailboxStatisticsSearchResultType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\UserMailboxType
     */
    protected $userMailbox = null;

    /**
     * @var \Tingo\ews\API\Type\KeywordStatisticsSearchResultType
     */
    protected $keywordStatisticsSearchResult = null;
}
