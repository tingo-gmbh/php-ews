<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class Message
 *
 * @method boolean isRead()
 * @package Tingo\ews\API\Type
 */
class Message extends Type
{
    public function isAReply()
    {
        return ($this->exists('InReplyTo') && $this->InReplyTo !== null);
    }
}
