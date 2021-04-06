<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing OutOfOfficeMailTipType
 *
 *
 * XSD Type: OutOfOfficeMailTip
 *
 * @method ReplyBodyType getReplyBody()
 * @method OutOfOfficeMailTipType setReplyBody(ReplyBodyType $replyBody)
 * @method DurationType getDuration()
 * @method OutOfOfficeMailTipType setDuration(DurationType $duration)
 */
class OutOfOfficeMailTipType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\ReplyBodyType
     */
    protected $replyBody = null;

    /**
     * @var \Tingo\ews\API\Type\DurationType
     */
    protected $duration = null;
}
