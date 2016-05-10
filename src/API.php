<?php

namespace garethp\ews;

use garethp\ews\API\Enumeration\DictionaryURIType;
use garethp\ews\API\Enumeration\UnindexedFieldURIType;
use garethp\ews\API\Exception\ExchangeException;
use garethp\ews\API\ExchangeWebServices;
use garethp\ews\API\Message\GetServerTimeZonesType;
use garethp\ews\API\Message\SyncFolderItemsResponseMessageType;
use garethp\ews\API\Message\UpdateItemResponseMessageType;
use garethp\ews\API\Type;
use garethp\ews\Calendar\CalendarAPI;
use garethp\ews\Mail\MailAPI;
use garethp\ews\API\FieldURIManager;

/**
 * A base class for APIs
 *
 * Class BaseAPI
 * @package garethp\ews
 */
class API
{
    protected static $defaultClientOptions = array(
        'version' => ExchangeWebServices::VERSION_2010
    );

    public function __construct(ExchangeWebServices $client = null)
    {
        if ($client) {
            $this->setClient($client);
        }
    }

    /**
     * @return Type\EmailAddressType
     */
    public function getPrimarySmtpMailbox()
    {
        return $this->getClient()->getPrimarySmtpMailbox();
    }

    /**
     * Storing the API client
     * @var ExchangeWebServices
     */
    private $client;

    /**
     * @deprecated This will be removed in 0.9
     *
     * @param $className
     * @return array
     */
    public function getFieldUrisFromClass($className)
    {
        return FieldURIManager::getFieldUrisFromClass($className);
    }

    public function setupFieldUris()
    {
        FieldURIManager::setupFieldUris();
    }

    /**
     * @deprecated This will be removed in 0.9. See FieldURIManager
     *
     * @param $fieldName
     * @param string $preference
     * @throws ExchangeException
     * @return string
     */
    public function getFieldUriByName($fieldName, $preference = 'item')
    {
        return FieldURIManager::getFieldUriByName($fieldName, $preference);
    }

    /**
     * @deprecated This will be removed in 0.9. See FieldURIManager
     *
     * @param $fieldName
     * @param string $preference
     * @param bool $entryKey
     * @throws ExchangeException
     * @return string
     */
    public function getIndexedFieldUriByName($fieldName, $preference = 'item', $entryKey = false)
    {
        return FieldURIManager::getIndexedFieldUriByName($fieldName, $preference, $entryKey);
    }

    /**
     * Get a calendar item
     *
     * @param string $name
     * @return CalendarAPI
     */
    public function getCalendar($name = null)
    {
        $calendar = new CalendarAPI();
        $calendar->setClient($this->getClient());
        $calendar->pickCalendar($name);

        return $calendar;
    }

    /**
     * @param string $folderName
     * @return MailAPI
     */
    public function getMailbox($folderName = null)
    {
        $mailApi = new MailAPI();
        $mailApi->setClient($this->getClient());
        $mailApi->pickMailFolder($folderName);

        return $mailApi;
    }

    /**
     * Set the API client
     *
     * @param ExchangeWebServices $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->client = $client;
        return $this;
    }

    /**
     * Get the API client
     *
     * @return ExchangeWebServices
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Instantiate and set a client (ExchangeWebServices) based on the parameters given
     *
     * @deprecated Since 0.6.3
     * @param $server
     * @param $username
     * @param $password
     * @param array $options
     * @return $this
     */
    public function buildClient(
        $server,
        $username,
        $password,
        $options = []
    ) {
        $this->setClient(ExchangeWebServices::fromUsernameAndPassword(
            $server,
            $username,
            $password,
            array_replace_recursive(self::$defaultClientOptions, $options)
        ));
    }

    public static function withUsernameAndPassword($server, $username, $password, $options = [])
    {
        return new static(ExchangeWebServices::fromUsernameAndPassword(
            $server,
            $username,
            $password,
            array_replace_recursive(self::$defaultClientOptions, $options)
        ));
    }

    public static function withCallbackToken($server, $token, $options = [])
    {
        return new static(ExchangeWebServices::fromCallbackToken(
            $server,
            $token,
            array_replace_recursive(self::$defaultClientOptions, $options)
        ));
    }

    public function getPrimarySmptEmailAddress()
    {
        if ($this->getPrimarySmtpMailbox() == null) {
            return null;
        }

        return $this->getPrimarySmtpMailbox()->getEmailAddress();
    }

    public function setPrimarySmtpEmailAddress($emailAddress)
    {
        $this->getClient()->setPrimarySmtpEmailAddress($emailAddress);

        return $this;
    }

    /**
     * Create items through the API client
     *
     * @param $items
     * @param array $options
     * @return Type
     */
    public function createItems($items, $options = array())
    {
        if (!is_array($items)) {
            $items = array($items);
        }

        $request = array(
            'Items' => $items
        );

        $request = array_replace_recursive($request, $options);
        $request = Type::buildFromArray($request);

        $response = $this->getClient()->CreateItem($request);

        return $response;
    }

    public function updateItems($items, $options = array())
    {
        $request = array(
            'ItemChanges' => $items,
            'MessageDisposition' => 'SaveOnly',
            'ConflictResolution' => 'AlwaysOverwrite'
        );

        $request = array_replace_recursive($request, $options);

        $request = Type::buildFromArray($request);

        $response = $this->getClient()->UpdateItem($request);
        if ($response instanceof UpdateItemResponseMessageType) {
            return $response->getItems();
        }

        if (!is_array($response)) {
            $response = array($response);
        }
        return $response;
    }

    protected function getFieldURI($uriType, $key = null, $value = null)
    {
        if (strpos($key, ':') !== false) {
            try {
                $fieldUriValue = substr($key, 0, strpos($key, ':'));

                list ($key, $index) = explode(':', $key);

                if (is_array($value)) {
                    $key = key($value);
                    $value = $value[$key];
                }

                if (is_array($value) && !empty($value['Entry']) && is_array($value['Entry'])) {
                    $entryKey = $value['Entry']['Key'];
                    unset($value['Entry']['Key']);
                    reset($value['Entry']);

                    $fieldKey = key($value['Entry']);
                    $value['Entry']['Key'] = $entryKey;
                    $fieldUri = $this->getIndexedFieldUriByName($fieldUriValue, $uriType, $fieldKey);
                } else {
                    $fieldUri = $this->getIndexedFieldUriByName($fieldUriValue, $uriType);
                }

                return ['IndexedFieldURI', ['FieldURI' => $fieldUri, 'FieldIndex' => $index], $key, $value];
            } catch (\Exception $e) {
            }
        }

        $fullName = $this->getFieldUriByName($key, $uriType);
        return ['FieldURI', ['FieldURI' => $fullName], $key, $value];
    }

    /**
     * @param string $itemType
     * @param string $uriType
     */
    protected function buildUpdateItemChanges($itemType, $uriType, $changes)
    {
        $setItemFields = array();
        $deleteItemFields = array();

        if (isset($changes['deleteFields'])) {
            foreach ($changes['deleteFields'] as $key) {
                list($fieldUriType, $fieldKey) = $this->getFieldURI($uriType, $key);
                $deleteItemFields[] = [$fieldUriType => $fieldKey];
            }

            unset($changes['deleteFields']);
        }

        //Add each property to a setItemField
        foreach ($changes as $key => $valueArray) {
            $valueArray = $this->splitDictionaryUpdateEntries($valueArray);
            if (!is_array($valueArray) || Type::arrayIsAssoc($valueArray)) {
                $valueArray = array($valueArray);
            }

            foreach ($valueArray as $value) {
                list ($fieldUriType, $fieldKey, $valueKey, $value) = $this->getFieldURI($uriType, $key, $value);
                $setItemFields[] = array(
                    $fieldUriType => $fieldKey,
                    $itemType => [$valueKey => $value]
                );
            }
        }

        return array('SetItemField' => $setItemFields, 'DeleteItemField' => $deleteItemFields);
    }

    protected function splitDictionaryUpdateEntries($value)
    {
        if (!is_array($value)) {
            return $value;
        }

        reset($value);
        $fieldKey = key($value);

        if (!is_array($value[$fieldKey]) || empty($value[$fieldKey]['Entry'])) {
            return $value;
        }

        $entryKey = $value[$fieldKey]['Entry']['Key'];
        unset($value[$fieldKey]['Entry']['Key']);

        $newValue = [];
        foreach ($value[$fieldKey]['Entry'] as $key => $updateValue) {
            $newValue[] = [$fieldKey => ['Entry' => ['Key' => $entryKey, $key => $updateValue]]];
        }

        $value = $newValue;

        return $value;
    }

    public function createFolders($names, Type\FolderIdType $parentFolder, $options = array())
    {
        $request = array('Folders' => array('Folder' => array()));
        if (!empty($parentFolder)) {
            $request['ParentFolderId'] = array('FolderId' => $parentFolder->toArray());
        }

        if (!is_array($names)) {
            $names = array($names);
        }

        foreach ($names as $name) {
            $request['Folders']['Folder'][] = array(
                'DisplayName' => $name
            );
        }

        $request = array_merge_recursive($request, $options);

        $this->client->CreateFolder($request);

        return true;
    }

    public function deleteFolder(Type\FolderIdType $folderId, $options = array())
    {
        $request = array(
            'DeleteType' => 'HardDelete',
            'FolderIds' => array(
                'FolderId' => $folderId->toArray()
            )
        );

        $request = array_merge_recursive($request, $options);
        return $this->client->DeleteFolder($request);
    }

    public function moveItem(Type\ItemIdType $itemId, Type\FolderIdType $folderId, $options = array())
    {
        $request = array(
            'ToFolderId' => array('FolderId' => $folderId->toArray()),
            'ItemIds' => array('ItemId' => $itemId->toArray())
        );

        $request = array_merge_recursive($request, $options);

        return $this->client->MoveItem($request);
    }

    /**
     * @param $items Type\ItemIdType|Type\ItemIdType[]
     * @param array $options
     * @return bool
     */
    public function deleteItems($items, $options = array())
    {
        if (!is_array($items) || Type::arrayIsAssoc($items)) {
            $items = array($items);
        }

        $itemIds = array();
        foreach ($items as $item) {
            if ($item instanceof Type\ItemIdType) {
                $item = $item->toArray();
            }
            $item = (array) $item;
            $itemIds[] = array(
                'Id' => $item['Id'],
                'ChangeKey' => $item['ChangeKey']
            );
        }

        $request = array(
            'ItemIds' => array('ItemId' => $itemIds),
            'DeleteType' => 'MoveToDeletedItems'
        );

        $request = array_replace_recursive($request, $options);
        $request = Type::buildFromArray($request);
        $this->getClient()->DeleteItem($request);

        //If the delete fails, an Exception will be thrown in processResponse before it gets here
        return true;
    }

    /**
     * @param $identifier
     * @return Type\BaseFolderType
     */
    public function getFolder($identifier)
    {
        $request = array(
            'FolderShape' => array(
                'BaseShape' => array('_' => 'Default')
            ),
            'FolderIds' => $identifier
        );
        $request = Type::buildFromArray($request);

        $response = $this->getClient()->GetFolder($request);
        return $response;
    }

    /**
     * Get a folder by it's distinguishedId
     *
     * @param string $distinguishedId
     * @return Type\BaseFolderType
     */
    public function getFolderByDistinguishedId($distinguishedId)
    {
        return $this->getFolder(array(
            'DistinguishedFolderId' => array(
                'Id' => $distinguishedId,
                'Mailbox' => $this->getPrimarySmtpMailbox()
            )
        ));
    }

    /**
     * @param $folderId
     * @return Type\BaseFolderType
     */
    public function getFolderByFolderId($folderId)
    {
        return $this->getFolder(array(
            'FolderId' => array('Id'=>$folderId, 'Mailbox' => $this->getPrimarySmtpMailbox())
        ));
    }

    /**
     * @param string|Type\FolderIdType $parentFolderId
     * @param array $options
     * @return bool|Type\BaseFolderType
     */
    public function getChildrenFolders($parentFolderId = 'root', $options = array())
    {
        if (is_string($parentFolderId)) {
            $parentFolderId = $this->getFolderByDistinguishedId($parentFolderId)->getFolderId();
        }

        $request = array(
            'Traversal' => 'Shallow',
            'FolderShape' => array(
                'BaseShape' => 'AllProperties'
            ),
            'ParentFolderIds' => array(
                'FolderId' => $parentFolderId->toArray()
            )
        );

        $request = array_replace_recursive($request, $options);

        $request = Type::buildFromArray($request);

        /** @var \garethp\ews\API\Message\FindFolderResponseMessageType $folders */
        return $this->getClient()->FindFolder($request);
        return $folders->getFolders();
    }

    /**
     * @param string $folderName
     * @param string|Type\FolderIdType $parentFolderId
     * @param array $options
     * @return bool|Type\BaseFolderType
     */
    public function getFolderByDisplayName($folderName, $parentFolderId = 'root', $options = array())
    {
        $folders = $this->getChildrenFolders($parentFolderId, $options);

        foreach ($folders as $folder) {
            if ($folder->getDisplayName() == $folderName) {
                return $folder;
            }
        }

        return false;
    }

    /**
     * @param $itemId array|Type\ItemIdType
     * @param array $options
     * @return Type
     */
    public function getItem($itemId, $options = array())
    {
        if ($itemId instanceof Type\ItemIdType) {
            $itemId = $itemId->toArray();
        }

        $request = array(
            'ItemShape' => array('BaseShape' => 'AllProperties'),
            'ItemIds' => array('ItemId' => $itemId)
        );

        $request = array_replace_recursive($request, $options);

        return $this->getClient()->GetItem($request);
    }

    /**
     * Get a list of sync changes on a folder
     *
     * @param Type\FolderIdType $folderId
     * @param null $syncState
     * @param array $options
     * @return SyncFolderItemsResponseMessageType
     */
    public function listItemChanges($folderId, $syncState = null, $options = array())
    {
        $request = array(
            'ItemShape' => array('BaseShape' => 'IdOnly'),
            'SyncFolderId' => array('FolderId' => $folderId->toXmlObject()),
            'SyncScope' => 'NormalItems',
            'MaxChangesReturned' => '10'
        );

        if ($syncState != null) {
            $request['SyncState'] = $syncState;
            $request['ItemShape']['BaseShape'] = 'AllProperties';
        }

        $request = array_replace_recursive($request, $options);

        $request = Type::buildFromArray($request);
        $response = $this->getClient()->SyncFolderItems($request);
        return $response;
    }

    public function getServerTimezones($timezoneIDs = array(), $fullTimezoneData = false)
    {
        $request = GetServerTimeZonesType::buildFromArray(array(
            'returnFullTimeZoneData' => $fullTimezoneData
        ));

        if (!empty($timezoneIDs)) {
            $request->setIds($timezoneIDs);
        }

        $timezones = $this->getClient()->GetServerTimeZones($request);
        $timezones = $timezones->TimeZoneDefinition;

        if (!is_array($timezones)) {
            $timezones = array($timezones);
        }

        return $timezones;
    }

    /**
     * @param Type\ItemIdType $itemId
     * @param $fromType
     * @param $destinationType
     * @param $mailbox
     *
     * @return Type\ItemIdType
     */
    public function convertIdFormat(Type\ItemIdType $itemId, $fromType, $destinationType, $mailbox)
    {
        $result = $this->getClient()->ConvertId(array(
            'DestinationFormat' => $destinationType,
            'SourceIds' => array(
                'AlternateId' => array(
                    'Format' => $fromType,
                    'Id' => $itemId->getId(),
                    'Mailbox' => $mailbox
                )
            )
        ));

        $itemId->setId($result->getId());

        return $itemId;
    }
}
