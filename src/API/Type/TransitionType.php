<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing TransitionType
 *
 *
 * XSD Type: TransitionType
 *
 * @method TransitionTargetType getTo()
 * @method TransitionType setTo(TransitionTargetType $to)
 */
class TransitionType extends Type
{

    /**
     * @var \Tingo\ews\API\Type\TransitionTargetType
     */
    protected $to = null;
}
