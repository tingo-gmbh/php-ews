<?php

namespace garethp\ews\Test\Contacts;

use garethp\ews\API\Enumeration\PhysicalAddressKeyType;
use garethp\ews\API\Type\ContactItemType;
use garethp\ews\API\Type\ItemIdType;
use PHPUnit_Framework_TestCase;
use garethp\ews\Contacts\ContactsAPI as API;

class ContactsAPI extends PHPUnit_Framework_TestCase
{
    /**
     * @return \garethp\ews\Contacts\ContactsAPI
     */
    public function getClient()
    {
        $mode = getenv('HttpPlayback');
        if ($mode == false) {
            $mode = 'playback';
        }
        
        $auth = [
            'server' => 'server',
            'user' => 'user',
            'password' => 'password'
        ];

        if (is_file(getcwd() . '/Resources/auth.json')) {
            $auth = json_decode(file_get_contents(getcwd() . '/Resources/auth.json'), true);
        }

        $client = API::withUsernameAndPassword(
            $auth['server'],
            $auth['user'],
            $auth['password'],
            [
                'httpPlayback' => [
                    'mode' => $mode,
                    'recordFileName' => self::class . '.' . $this->getName() . '.json'
                ]
            ]
        );

        $testFolder = $client->getFolderByDisplayName('Test', $client->getFolderId());
        $client->setFolderId($testFolder->getFolderId());

        return $client;
    }

    public function testCreateContact()
    {
        $api = $this->getClient();

        $contact = $api->createContacts(array (
            'GivenName' => 'John',
            'Surname' => 'Smith',
            'EmailAddresses' => array(
                'Entry' => array('Key' => 'EmailAddress1', '_value' => 'john.smith@gmail.com')
            ),
            'PhoneNumbers' => array(
                'Entry' => array('Key' => 'HomePhone', '_value' => '000')
            )
        ));

        $this->assertArrayHasKey(0, $contact);

        $contact = $contact[0];
        $this->assertInstanceOf(ItemIdType::class, $contact);

        $contact = $api->getContact($contact);
        $this->assertNotNull($contact);
        $this->assertEquals('John', $contact->getGivenName());

        $api->deleteItems($contact->getItemId());
    }

    public function testUpdateContact()
    {
        $api = $this->getClient();

        $contact = $api->createContacts(array (
            'GivenName' => 'John',
            'Surname' => 'Smith',
            'EmailAddresses' => array(
                'Entry' => array('Key' => 'EmailAddress1', '_value' => 'john.smith@gmail.com')
            ),
            'PhoneNumbers' => array(
                'Entry' => array('Key' => 'HomePhone', '_value' => '000')
            ),
            'PhysicalAddresses' => array(
                'Entry' => array(
                    'Key' => PhysicalAddressKeyType::HOME,
                    'street' => '123 Street',
                    'city' => '123 City',
                    'state' => '123 State',
                    'countryOrRegion' => '123 Country',
                    'postalCode' => '12345',
                )
            )
        ));

        $contact = $contact[0];
        $api->updateContactItem($contact, array(
            'GivenName' => 'Jane',
            'EmailAddress:EmailAddress1' => array (
                'EmailAddresses' => array (
                    'Entry' => array('Key' => 'EmailAddress1', '_value' => 'jane.smith@gmail.com')
                )
            ),
            'PhoneNumber:HomePhone' => array (
                'PhoneNumbers' => array (
                    'Entry' => array('Key' => 'HomePhone', '_value' => '111')
                )
            ),
            'PhysicalAddress:Home' => array(
                'PhysicalAddresses' => array(
                    'Entry' => array(
                        'Key' => 'Home',
                        'street' => '123 Street New',
                        'city' => '123 City New',
                    )
                )
            )
        ));

        $contact = $api->getContact($contact);
        $this->assertEquals('Jane', $contact->getGivenName());
        $this->assertEquals('jane.smith@gmail.com', $contact->getEmailAddresses()->Entry);
        $this->assertEquals('111', $contact->getPhoneNumbers()->Entry);
        $this->assertEquals('123 Street New', $contact->getPhysicalAddresses()->Entry->getStreet());
        $this->assertEquals('123 City New', $contact->getPhysicalAddresses()->Entry->getCity());

        $api->deleteItems($contact->getItemId());
    }
}
