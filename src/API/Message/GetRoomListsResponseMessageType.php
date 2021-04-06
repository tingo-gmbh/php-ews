<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetRoomListsResponseMessageType
 *
 *
 * XSD Type: GetRoomListsResponseMessageType
 *
 * @method GetRoomListsResponseMessageType addRoomLists(\Tingo\ews\API\Type\EmailAddressType $roomLists)
 * @method \Tingo\ews\API\Type\EmailAddressType[] getRoomLists()
 * @method GetRoomListsResponseMessageType setRoomLists(array $roomLists)
 */
class GetRoomListsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType[]
     */
    protected $roomLists = null;
}
