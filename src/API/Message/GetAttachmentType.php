<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing GetAttachmentType
 *
 *
 * XSD Type: GetAttachmentType
 *
 * @method \Tingo\ews\API\Type\AttachmentResponseShapeType getAttachmentShape()
 * @method GetAttachmentType setAttachmentShape(\Tingo\ews\API\Type\AttachmentResponseShapeType $attachmentShape)
 * @method GetAttachmentType addAttachmentIds(\Tingo\ews\API\Type\RequestAttachmentIdType $attachmentIds)
 * @method \Tingo\ews\API\Type\RequestAttachmentIdType[] getAttachmentIds()
 * @method GetAttachmentType setAttachmentIds(array $attachmentIds)
 */
class GetAttachmentType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\AttachmentResponseShapeType
     */
    protected $attachmentShape = null;

    /**
     * @var \Tingo\ews\API\Type\RequestAttachmentIdType[]
     */
    protected $attachmentIds = null;
}
