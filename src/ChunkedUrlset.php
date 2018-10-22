<?php

namespace Aterbonus\Sitemap;

class ChunkedUrlset extends ChunkedCollection
{
    protected function getCollectionClass()
    {
        return new Urlset();
    }
}
