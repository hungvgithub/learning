<?php
declare(strict_types=1);

namespace Sosc\TimeCountry\Block\Time;

use Magento\Framework\View\Element\Template;

/**
 * Block Country
 */
class Country extends Template
{
    protected $_template = 'Sosc_TimeCountry::timecountry.phtml';

    const ACTION_TIME_COUNTRY_PATH = 'time/timecountry/handletimecountry';

    /**
     * Get Action Time Country Url
     *
     * @return string
     */
    public function getActionUrl(): string
    {
        return $this->getUrl(self::ACTION_TIME_COUNTRY_PATH);
    }

    /**
     * @return array
     */
    public function getListCountry()
    {
        return [
            'Choose Country' => '',
            'USA' => 'us',
            'Viet Nam' => 'vn'
        ];
    }
}
