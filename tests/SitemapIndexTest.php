<?php

namespace Tests\Aterbonus\Sitemap;

use PHPUnit\Framework\TestCase;
use Aterbonus\Sitemap\SitemapIndex;
use Aterbonus\Sitemap\Url;

class SitemapIndexTest extends TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testCollectionType()
    {
        $sitemap = new Url('https://example.com');

        $sitemapIndex = new SitemapIndex();
        $sitemapIndex->add($sitemap);
    }
}
