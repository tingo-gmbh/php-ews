<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\NotificationEventTypeType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing NotificationEventTypeType
 *
 *
 * XSD Type: NotificationEventTypeType
 */
class NotificationEventTypeType extends Enumeration
{

    const COPIED_EVENT = 'CopiedEvent';

    const CREATED_EVENT = 'CreatedEvent';

    const DELETED_EVENT = 'DeletedEvent';

    const FREE_BUSY_CHANGED_EVENT = 'FreeBusyChangedEvent';

    const MODIFIED_EVENT = 'ModifiedEvent';

    const MOVED_EVENT = 'MovedEvent';

    const NEW_MAIL_EVENT = 'NewMailEvent';
}
