<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing ArrayOfAttachmentsType
 *
 *
 * XSD Type: ArrayOfAttachmentsType
 *
 * @method ArrayOfAttachmentsType addItemAttachment(ItemAttachmentType $itemAttachment)
 * @method ItemAttachmentType[] getItemAttachment()
 * @method ArrayOfAttachmentsType setItemAttachment(array $itemAttachment)
 * @method ArrayOfAttachmentsType addFileAttachment(FileAttachmentType $fileAttachment)
 * @method FileAttachmentType[] getFileAttachment()
 * @method ArrayOfAttachmentsType setFileAttachment(array $fileAttachment)
 */
class ArrayOfAttachmentsType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\ItemAttachmentType[]
     */
    protected $itemAttachment = null;

    /**
     * @var \Tingo\ews\API\Type\FileAttachmentType[]
     */
    protected $fileAttachment = null;
}
