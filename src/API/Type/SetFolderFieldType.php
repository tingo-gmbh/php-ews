<?php

namespace Tingo\ews\API\Type;

/**
 * Class representing SetFolderFieldType
 *
 *
 * XSD Type: SetFolderFieldType
 *
 * @method FolderType getFolder()
 * @method SetFolderFieldType setFolder(FolderType $folder)
 * @method CalendarFolderType getCalendarFolder()
 * @method SetFolderFieldType setCalendarFolder(CalendarFolderType $calendarFolder)
 * @method ContactsFolderType getContactsFolder()
 * @method SetFolderFieldType setContactsFolder(ContactsFolderType $contactsFolder)
 * @method SearchFolderType getSearchFolder()
 * @method SetFolderFieldType setSearchFolder(SearchFolderType $searchFolder)
 * @method TasksFolderType getTasksFolder()
 * @method SetFolderFieldType setTasksFolder(TasksFolderType $tasksFolder)
 */
class SetFolderFieldType extends FolderChangeDescriptionType
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
