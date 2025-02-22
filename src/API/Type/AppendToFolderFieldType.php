<?php

namespace Tingo\ews\API\Type;

/**
 * Class representing AppendToFolderFieldType
 *
 *
 * XSD Type: AppendToFolderFieldType
 *
 * @method FolderType getFolder()
 * @method AppendToFolderFieldType setFolder(FolderType $folder)
 * @method CalendarFolderType getCalendarFolder()
 * @method AppendToFolderFieldType setCalendarFolder(CalendarFolderType $calendarFolder)
 * @method ContactsFolderType getContactsFolder()
 * @method AppendToFolderFieldType setContactsFolder(ContactsFolderType $contactsFolder)
 * @method SearchFolderType getSearchFolder()
 * @method AppendToFolderFieldType setSearchFolder(SearchFolderType $searchFolder)
 * @method TasksFolderType getTasksFolder()
 * @method AppendToFolderFieldType setTasksFolder(TasksFolderType $tasksFolder)
 */
class AppendToFolderFieldType extends FolderChangeDescriptionType
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
