<?php

namespace Tests\Aterbonus\Sitemap;

use PHPUnit\Framework\TestCase;
use Aterbonus\Sitemap\ChunkedUrlset;
use Aterbonus\Sitemap\Url;

class ChunkedUrlsetTest extends TestCase
{
    public function testChunkingWithOne()
    {
        $url = new Url('https://example.com');

        $urlset = new ChunkedUrlset();
        $urlset->add($url);

        $this->assertCount(1, $urlset->getCollections());
    }

    public function testChunkingWithMultiple()
    {
        $url = new Url('https://example.com');

        $urlset = new ChunkedUrlset();

        for ($i = 0; $i < 50001; $i++) {
            $urlset->add($url);
        }

        $this->assertCount(2, $urlset->getCollections());
    }
}
