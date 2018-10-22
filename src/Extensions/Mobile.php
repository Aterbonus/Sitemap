<?php

namespace Aterbonus\Sitemap\Extensions;

use Aterbonus\Sitemap\Interfaces\DriverInterface;
use Aterbonus\Sitemap\Interfaces\VisitorInterface;
use XMLWriter;

/**
 * Class Mobile
 *
 * @package Aterbonus\Sitemap\Subelements
 */
class Mobile implements VisitorInterface
{
    public function accept(DriverInterface $driver)
    {
        $driver->visitMobileExtension($this);
    }
}
