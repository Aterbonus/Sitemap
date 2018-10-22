<?php

namespace Aterbonus\Sitemap;

use Aterbonus\Sitemap\Interfaces\DriverInterface;

class SitemapIndex extends Collection
{
    public function type()
    {
        return Sitemap::class;
    }

    public function accept(DriverInterface $driver)
    {
        $driver->visitSitemapIndex($this);
    }
}
