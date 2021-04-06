<?php
/**
 * Contains \Tingo\ews\API\Enumeration\ResponseClassType.
 */


namespace Tingo\ews\API\Enumeration;

use Tingo\ews\API\Enumeration;

/**
 * Class representing ResponseClassType
 *
 *
 * XSD Type: ResponseClassType
 */
class ResponseClassType extends Enumeration
{

    const ERROR = 'Error';

    const SUCCESS = 'Success';

    const WARNING = 'Warning';
}
