<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing NonEmptyArrayOfFoldersType
 *
 *
 * XSD Type: NonEmptyArrayOfFoldersType
 *
 * @method NonEmptyArrayOfFoldersType addFolder(FolderType $folder)
 * @method FolderType[] getFolder()
 * @method NonEmptyArrayOfFoldersType setFolder(array $folder)
 * @method NonEmptyArrayOfFoldersType addCalendarFolder(CalendarFolderType $calendarFolder)
 * @method CalendarFolderType[] getCalendarFolder()
 * @method NonEmptyArrayOfFoldersType setCalendarFolder(array $calendarFolder)
 * @method NonEmptyArrayOfFoldersType addContactsFolder(ContactsFolderType $contactsFolder)
 * @method ContactsFolderType[] getContactsFolder()
 * @method NonEmptyArrayOfFoldersType setContactsFolder(array $contactsFolder)
 * @method NonEmptyArrayOfFoldersType addSearchFolder(SearchFolderType $searchFolder)
 * @method SearchFolderType[] getSearchFolder()
 * @method NonEmptyArrayOfFoldersType setSearchFolder(array $searchFolder)
 * @method NonEmptyArrayOfFoldersType addTasksFolder(TasksFolderType $tasksFolder)
 * @method TasksFolderType[] getTasksFolder()
 * @method NonEmptyArrayOfFoldersType setTasksFolder(array $tasksFolder)
 */
class NonEmptyArrayOfFoldersType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\FolderType[]
     */
    protected $folder = null;

    /**
     * @var \Tingo\ews\API\Type\CalendarFolderType[]
     */
    protected $calendarFolder = null;

    /**
     * @var \Tingo\ews\API\Type\ContactsFolderType[]
     */
    protected $contactsFolder = null;

    /**
     * @var \Tingo\ews\API\Type\SearchFolderType[]
     */
    protected $searchFolder = null;

    /**
     * @var \Tingo\ews\API\Type\TasksFolderType[]
     */
    protected $tasksFolder = null;
}
