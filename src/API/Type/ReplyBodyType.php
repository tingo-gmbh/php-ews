<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing ReplyBodyType
 *
 *
 * XSD Type: ReplyBody
 *
 * @method \Tingo\ews\API\Type\ReplyBodyType\LangAType getLang()
 * @method ReplyBodyType setLang(\Tingo\ews\API\Type\ReplyBodyType\LangAType $lang)
 * @method string getMessage()
 * @method ReplyBodyType setMessage(string $message)
 */
class ReplyBodyType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\ReplyBodyType\LangAType
     */
    protected $lang = null;

    /**
     * @var string
     */
    protected $message = null;
}
