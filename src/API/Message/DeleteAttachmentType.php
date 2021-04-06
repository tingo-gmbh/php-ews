<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing DeleteAttachmentType
 *
 *
 * XSD Type: DeleteAttachmentType
 *
 * @method DeleteAttachmentType addAttachmentIds(\Tingo\ews\API\Type\RequestAttachmentIdType $attachmentIds)
 * @method \Tingo\ews\API\Type\RequestAttachmentIdType[] getAttachmentIds()
 * @method DeleteAttachmentType setAttachmentIds(array $attachmentIds)
 */
class DeleteAttachmentType extends BaseRequestType
{

    /**
     * @var \Tingo\ews\API\Type\RequestAttachmentIdType[]
     */
    protected $attachmentIds = null;
}
