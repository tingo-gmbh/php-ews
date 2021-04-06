<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing SyncFolderHierarchyCreateOrUpdateType
 *
 *
 * XSD Type: SyncFolderHierarchyCreateOrUpdateType
 *
 * @method FolderType getFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setFolder(FolderType $folder)
 * @method CalendarFolderType getCalendarFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setCalendarFolder(CalendarFolderType $calendarFolder)
 * @method ContactsFolderType getContactsFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setContactsFolder(ContactsFolderType $contactsFolder)
 * @method SearchFolderType getSearchFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setSearchFolder(SearchFolderType $searchFolder)
 * @method TasksFolderType getTasksFolder()
 * @method SyncFolderHierarchyCreateOrUpdateType setTasksFolder(TasksFolderType $tasksFolder)
 */
class SyncFolderHierarchyCreateOrUpdateType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\FolderType
     */
    protected $folder = null;

    /**
     * @var \Tingo\ews\API\Type\CalendarFolderType
     */
    protected $calendarFolder = null;

    /**
     * @var \Tingo\ews\API\Type\ContactsFolderType
     */
    protected $contactsFolder = null;

    /**
     * @var \Tingo\ews\API\Type\SearchFolderType
     */
    protected $searchFolder = null;

    /**
     * @var \Tingo\ews\API\Type\TasksFolderType
     */
    protected $tasksFolder = null;
}
