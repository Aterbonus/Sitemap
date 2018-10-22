<?php

namespace Tests\Aterbonus\Sitemap;

use PHPUnit\Framework\TestCase;
use Aterbonus\Sitemap\Sitemap;
use Aterbonus\Sitemap\Url;
use Aterbonus\Sitemap\Urlset;

class UrlsetTest extends TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testCollectionType()
    {
        $sitemap = new Sitemap('https://example.com');

        $urlset = new Urlset();
        $urlset->add($sitemap);
    }
}
