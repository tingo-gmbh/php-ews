<?php

namespace garethp\ews\Utilities;

use garethp\ews\API\Type;

/**
 * @param $input
 * @return array
 */
function ensureIsArray($input)
{
    if (!is_array($input) || Type::arrayIsAssoc($input)) {
        return [$input];
    }

    return $input;
}
