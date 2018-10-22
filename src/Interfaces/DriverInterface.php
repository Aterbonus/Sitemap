<?php

namespace Aterbonus\Sitemap\Interfaces;

use Aterbonus\Sitemap\Extensions\Image;
use Aterbonus\Sitemap\Extensions\Link;
use Aterbonus\Sitemap\Extensions\Mobile;
use Aterbonus\Sitemap\Extensions\News;
use Aterbonus\Sitemap\Extensions\Video;
use Aterbonus\Sitemap\Sitemap;
use Aterbonus\Sitemap\SitemapIndex;
use Aterbonus\Sitemap\Url;
use Aterbonus\Sitemap\Urlset;

interface DriverInterface
{
    public function visitSitemapIndex(SitemapIndex $sitemapIndex);

    public function visitSitemap(Sitemap $sitemap);

    public function visitUrlset(Urlset $urlset);

    public function visitUrl(Url $url);

    public function visitImageExtension(Image $image);

    public function visitLinkExtension(Link $link);

    public function visitMobileExtension(Mobile $mobile);

    public function visitNewsExtension(News $news);

    public function visitVideoExtension(Video $video);

    public function output();
}
