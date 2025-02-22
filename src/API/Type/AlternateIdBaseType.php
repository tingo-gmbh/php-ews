<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing AlternateIdBaseType
 *
 * Surfaces alternate representations of an item or folder id. No change key is included.
 * XSD Type: AlternateIdBaseType
 *
 * @method string getFormat()
 * @method AlternateIdBaseType setFormat(string $format)
 */
class AlternateIdBaseType extends Type
{

    /**
     * @var string
     */
    protected $format = null;
}
