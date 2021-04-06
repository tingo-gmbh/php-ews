<?php
/**
 * Contains \Tingo\ews\API\Enumeration\ResolveNamesSearchScopeType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

/**
 * Class representing ResolveNamesSearchScopeType
 *
 *
 * XSD Type: ResolveNamesSearchScopeType
 */
class ResolveNamesSearchScopeType extends Enumeration
{

    const ACTIVE_DIRECTORY = 'ActiveDirectory';

    const ACTIVE_DIRECTORY_CONTACTS = 'ActiveDirectoryContacts';

    const CONTACTS = 'Contacts';

    const CONTACTS_ACTIVE_DIRECTORY = 'ContactsActiveDirectory';
}
