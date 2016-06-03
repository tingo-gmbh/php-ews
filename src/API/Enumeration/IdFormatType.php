<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\IdFormatType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing IdFormatType
 *
 * Surfaces the various id types that are supported for conversion
 * XSD Type: IdFormatType
 */
class IdFormatType extends Enumeration
{

    const ENTRY_ID = 'EntryId';

    const EWS_ID = 'EwsId';

    const EWS_LEGACY_ID = 'EwsLegacyId';

    const HEX_ENTRY_ID = 'HexEntryId';

    const OWA_ID = 'OwaId';

    const STORE_ID = 'StoreId';
}
