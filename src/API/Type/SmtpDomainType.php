<?php

namespace Tingo\ews\API\Type;

use Tingo\ews\API\Type;

/**
 * Class representing SmtpDomainType
 *
 *
 * XSD Type: SmtpDomain
 *
 * @method string getName()
 * @method SmtpDomainType setName(string $name)
 * @method boolean isIncludeSubdomains()
 * @method boolean getIncludeSubdomains()
 * @method SmtpDomainType setIncludeSubdomains(boolean $includeSubdomains)
 */
class SmtpDomainType extends Type
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var boolean
     */
    protected $includeSubdomains = null;
}
