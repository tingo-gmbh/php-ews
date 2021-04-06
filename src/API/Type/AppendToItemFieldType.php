<?php

namespace Tingo\ews\API\Type;

/**
 * Class representing AppendToItemFieldType
 *
 *
 * XSD Type: AppendToItemFieldType
 *
 * @method ItemType getItem()
 * @method AppendToItemFieldType setItem(ItemType $item)
 * @method MessageType getMessage()
 * @method AppendToItemFieldType setMessage(MessageType $message)
 * @method CalendarItemType getCalendarItem()
 * @method AppendToItemFieldType setCalendarItem(CalendarItemType $calendarItem)
 * @method ContactItemType getContact()
 * @method AppendToItemFieldType setContact(ContactItemType $contact)
 * @method DistributionListType getDistributionList()
 * @method AppendToItemFieldType setDistributionList(DistributionListType $distributionList)
 * @method MeetingMessageType getMeetingMessage()
 * @method AppendToItemFieldType setMeetingMessage(MeetingMessageType $meetingMessage)
 * @method MeetingRequestMessageType getMeetingRequest()
 * @method AppendToItemFieldType setMeetingRequest(MeetingRequestMessageType $meetingRequest)
 * @method MeetingResponseMessageType getMeetingResponse()
 * @method AppendToItemFieldType setMeetingResponse(MeetingResponseMessageType $meetingResponse)
 * @method MeetingCancellationMessageType getMeetingCancellation()
 * @method AppendToItemFieldType setMeetingCancellation(MeetingCancellationMessageType $meetingCancellation)
 * @method TaskType getTask()
 * @method AppendToItemFieldType setTask(TaskType $task)
 * @method PostItemType getPostItem()
 * @method AppendToItemFieldType setPostItem(PostItemType $postItem)
 */
class AppendToItemFieldType extends ItemChangeDescriptionType
{

    /**
     * @var \Tingo\ews\API\Type\ItemType
     */
    protected $item = null;

    /**
     * @var \Tingo\ews\API\Type\MessageType
     */
    protected $message = null;

    /**
     * @var \Tingo\ews\API\Type\CalendarItemType
     */
    protected $calendarItem = null;

    /**
     * @var \Tingo\ews\API\Type\ContactItemType
     */
    protected $contact = null;

    /**
     * @var \Tingo\ews\API\Type\DistributionListType
     */
    protected $distributionList = null;

    /**
     * @var \Tingo\ews\API\Type\MeetingMessageType
     */
    protected $meetingMessage = null;

    /**
     * @var \Tingo\ews\API\Type\MeetingRequestMessageType
     */
    protected $meetingRequest = null;

    /**
     * @var \Tingo\ews\API\Type\MeetingResponseMessageType
     */
    protected $meetingResponse = null;

    /**
     * @var \Tingo\ews\API\Type\MeetingCancellationMessageType
     */
    protected $meetingCancellation = null;

    /**
     * @var \Tingo\ews\API\Type\TaskType
     */
    protected $task = null;

    /**
     * @var \Tingo\ews\API\Type\PostItemType
     */
    protected $postItem = null;
}
