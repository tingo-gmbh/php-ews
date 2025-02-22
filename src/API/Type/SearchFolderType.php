<?php

namespace Tingo\ews\API\Type;

/**
 * Class representing SearchFolderType
 *
 *
 * XSD Type: SearchFolderType
 *
 * @method SearchParametersType getSearchParameters()
 * @method SearchFolderType setSearchParameters(SearchParametersType $searchParameters)
 */
class SearchFolderType extends FolderType
{

    /**
     * @var \Tingo\ews\API\Type\SearchParametersType
     */
    protected $searchParameters = null;
}
