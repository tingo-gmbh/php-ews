<?php

namespace Tingo\ews\Test\Utilities;

use Tingo\ews\API\Type\Mailbox;
use Tingo\ews\Test\BaseTestCase;
use function Tingo\ews\Utilities\ensureIsMailbox;

class EnsureIsMailboxTest extends BaseTestCase
{
    public function testEnsureIsMailbox()
    {
        $mailbox = new Mailbox();
        $mailbox->setEmailAddress('test@test.com');

        self::assertEquals($mailbox, ensureIsMailbox('test@test.com'));
    }
}
