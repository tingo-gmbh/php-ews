<?php

namespace Tingo\ews\API;

class Message extends Type
{
    public function getNonNullResponseMessages()
    {
        return $this->getNonNullItems();
    }
}
