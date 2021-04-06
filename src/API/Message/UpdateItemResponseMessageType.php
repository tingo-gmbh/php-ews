<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing UpdateItemResponseMessageType
 *
 *
 * XSD Type: UpdateItemResponseMessageType
 *
 * @method \Tingo\ews\API\Type\ConflictResultsType getConflictResults()
 * @method UpdateItemResponseMessageType setConflictResults(\Tingo\ews\API\Type\ConflictResultsType $conflictResults)
 */
class UpdateItemResponseMessageType extends ItemInfoResponseMessageType
{

    /**
     * @var \Tingo\ews\API\Type\ConflictResultsType
     */
    protected $conflictResults = null;
}
