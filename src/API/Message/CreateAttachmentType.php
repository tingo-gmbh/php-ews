<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing CreateAttachmentType
 *
 *
 * XSD Type: CreateAttachmentType
 *
 * @method \Tingo\ews\API\Type\ItemIdType getParentItemId()
 * @method CreateAttachmentType setParentItemId(\Tingo\ews\API\Type\ItemIdType $parentItemId)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfAttachmentsType getAttachments()
 * @method CreateAttachmentType setAttachments(\Tingo\ews\API\Type\NonEmptyArrayOfAttachmentsType $attachments)
 */
class CreateAttachmentType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\ItemIdType
     */
    protected $parentItemId = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfAttachmentsType
     */
    protected $attachments = null;
}
