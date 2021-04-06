<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetRoomsType
 *
 *
 * XSD Type: GetRoomsType
 *
 * @method \Tingo\ews\API\Type\EmailAddressType getRoomList()
 * @method GetRoomsType setRoomList(\Tingo\ews\API\Type\EmailAddressType $roomList)
 */
class GetRoomsType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\EmailAddressType
     */
    protected $roomList = null;
}
