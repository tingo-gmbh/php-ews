<?php

namespace Tingo\ews\API\Message;

use Tingo\ews\API\Message;

/**
 * Class representing SuggestionsResponseType
 *
 *
 * XSD Type: SuggestionsResponseType
 *
 * @method ResponseMessageType getResponseMessage()
 * @method SuggestionsResponseType setResponseMessage(ResponseMessageType $responseMessage)
 * @method SuggestionsResponseType addSuggestionDayResultArray(\Tingo\ews\API\Type\SuggestionDayResultType $suggestionDayResultArray)
 * @method \Tingo\ews\API\Type\SuggestionDayResultType[] getSuggestionDayResultArray()
 * @method SuggestionsResponseType setSuggestionDayResultArray(array $suggestionDayResultArray)
 */
class SuggestionsResponseType extends Message
{

    /**
     * @var \Tingo\ews\API\Message\ResponseMessageType
     */
    protected $responseMessage = null;

    /**
     * @var \Tingo\ews\API\Type\SuggestionDayResultType[]
     */
    protected $suggestionDayResultArray = null;
}
