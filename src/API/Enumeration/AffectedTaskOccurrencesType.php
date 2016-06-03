<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\AffectedTaskOccurrencesType.
 */


namespace jamesiarmes\PEWS\API\Enumeration;

use jamesiarmes\PEWS\API\Enumeration;

/**
 * Class representing AffectedTaskOccurrencesType
 *
 *
 * XSD Type: AffectedTaskOccurrencesType
 */
class AffectedTaskOccurrencesType extends Enumeration
{

    const ALL = 'AllOccurrences';

    const SPECIFIED = 'SpecifiedOccurrenceOnly';

    const ALL_OCCURRENCES = 'AllOccurrences';

    const SPECIFIED_OCCURRENCE_ONLY = 'SpecifiedOccurrenceOnly';
}
