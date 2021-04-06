<?php

namespace Tingo\ews\API\Message;

/**
 * Class representing ResolveNamesType
 *
 *
 * XSD Type: ResolveNamesType
 *
 * @method boolean isReturnFullContactData()
 * @method boolean getReturnFullContactData()
 * @method ResolveNamesType setReturnFullContactData(boolean $returnFullContactData)
 * @method string getSearchScope()
 * @method ResolveNamesType setSearchScope(string $searchScope)
 * @method string getContactDataShape()
 * @method ResolveNamesType setContactDataShape(string $contactDataShape)
 * @method \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType getParentFolderIds()
 * @method ResolveNamesType setParentFolderIds(\Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType $parentFolderIds)
 * @method string getUnresolvedEntry()
 * @method ResolveNamesType setUnresolvedEntry(string $unresolvedEntry)
 */
class ResolveNamesType extends BaseRequestType
{

    /**
     * @var boolean
     */
    protected $returnFullContactData = null;

    /**
     * @var string
     */
    protected $searchScope = null;

    /**
     * @var string
     */
    protected $contactDataShape = null;

    /**
     * @var \Tingo\ews\API\Type\NonEmptyArrayOfBaseFolderIdsType
     */
    protected $parentFolderIds = null;

    /**
     * @var string
     */
    protected $unresolvedEntry = null;
}
