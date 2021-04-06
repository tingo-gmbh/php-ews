<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetRoomsResponseMessageType
 *
 *
 * XSD Type: GetRoomsResponseMessageType
 *
 * @method GetRoomsResponseMessageType addRooms(\Tingo\ews\API\Type\RoomType $rooms)
 * @method \Tingo\ews\API\Type\RoomType[] getRooms()
 * @method GetRoomsResponseMessageType setRooms(array $rooms)
 */
class GetRoomsResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\RoomType[]
     */
    protected $rooms = null;
}
