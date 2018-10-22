<?php

namespace Tests\Aterbonus\Sitemap;

use PHPUnit\Framework\TestCase;
use Aterbonus\Sitemap\Sitemap;

class SitemapTest extends TestCase
{
    public function testGetters()
    {
        $location = 'https://example.com';

        $sitemap = new Sitemap($location);

        $this->assertSame($location, $sitemap->getLoc());
        $this->assertNull($sitemap->getLastMod());
    }
}
