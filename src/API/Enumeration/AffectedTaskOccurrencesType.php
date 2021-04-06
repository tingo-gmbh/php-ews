<?php
/**
 * Contains \Tingo\ews\API\Enumeration\AffectedTaskOccurrencesType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

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
