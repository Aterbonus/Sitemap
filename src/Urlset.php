<?php

namespace Aterbonus\Sitemap;

use Aterbonus\Sitemap\Interfaces\DriverInterface;

class Urlset extends Collection
{
    public function type()
    {
        return Url::class;
    }

    public function accept(DriverInterface $driver)
    {
        $driver->visitUrlset($this);
    }
}
