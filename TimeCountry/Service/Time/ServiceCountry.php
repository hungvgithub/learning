<?php
declare(strict_types=1);

namespace Sosc\TimeCountry\Service\Time;

/**
 * Class ServiceCountry
 */
class ServiceCountry
{
    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @param string $countryCode
     */
    public function __construct(
        string $countryCode = ''
    )
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getTimeCountry()
    {
        $timezone = \DateTimeZone::listIdentifiers(\DateTimeZone::PER_COUNTRY, $this->countryCode);
        date_default_timezone_set($timezone[0]);

        return date('d-m-Y h:i:s a', time());
    }
}
