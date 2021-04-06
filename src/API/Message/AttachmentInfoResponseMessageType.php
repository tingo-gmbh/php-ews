<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing AttachmentInfoResponseMessageType
 *
 *
 * XSD Type: AttachmentInfoResponseMessageType
 *
 * @method \Tingo\ews\API\Type\ArrayOfAttachmentsType getAttachments()
 * @method AttachmentInfoResponseMessageType setAttachments(\Tingo\ews\API\Type\ArrayOfAttachmentsType $attachments)
 */
class AttachmentInfoResponseMessageType extends ResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\ArrayOfAttachmentsType
     */
    protected $attachments = null;
}
