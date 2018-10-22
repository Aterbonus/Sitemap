<?php

namespace Aterbonus\Sitemap\Extensions;

use Aterbonus\Sitemap\Interfaces\DriverInterface;
use Aterbonus\Sitemap\Interfaces\VisitorInterface;

/**
 * Class Link
 *
 * @package Aterbonus\Sitemap\Subelements
 */
class Link implements VisitorInterface
{
    /**
     * Language code for the page.
     *
     * @var string
     */
    protected $hrefLang;

    /**
     * Location of the translated page.
     *
     * @var string
     */
    protected $href;

    /**
     * Link constructor.
     *
     * @param string $hrefLang
     * @param string $href
     */
    public function __construct($hrefLang, $href)
    {
        $this->hrefLang = $hrefLang;
        $this->href = $href;
    }

    /**
     * Location of the translated page.
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Language code for the page.
     * 
     * @return string
     */
    public function getHrefLang()
    {
        return $this->hrefLang;
    }

    public function accept(DriverInterface $driver)
    {
        $driver->visitLinkExtension($this);
    }
}
