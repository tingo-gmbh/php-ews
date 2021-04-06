<?php
/**
 * Contains \Tingo\ews\API\Enumeration\CalendarItemCreateOrDeleteOperationType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

/**
 * Class representing CalendarItemCreateOrDeleteOperationType
 *
 *
 * XSD Type: CalendarItemCreateOrDeleteOperationType
 */
class CalendarItemCreateOrDeleteOperationType extends Enumeration
{

    const SEND_ONLY_TO_ALL = 'SendOnlyToAll';

    const SEND_TO_ALL_AND_SAVE_COPY = 'SendToAllAndSaveCopy';

    const SEND_TO_NONE = 'SendToNone';
}
