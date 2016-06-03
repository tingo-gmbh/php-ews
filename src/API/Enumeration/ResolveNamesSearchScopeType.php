<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\ResolveNamesSearchScopeType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

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
