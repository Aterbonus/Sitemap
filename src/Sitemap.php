<?php

namespace Aterbonus\Sitemap;

use DateTimeInterface;
use Aterbonus\Sitemap\Interfaces\DriverInterface;
use Aterbonus\Sitemap\Interfaces\VisitorInterface;

class Sitemap implements VisitorInterface
{
    /**
     * Location (URL).
     *
     * @var string
     */
    private $loc;

    /**
     * Last modified time.
     *
     * @var DateTimeInterface
     */
    private $lastMod;

    public function __construct($loc)
    {
        $this->loc = $loc;
    }

    /**
     * @return string
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * @return DateTimeInterface
     */
    public function getLastMod()
    {
        return $this->lastMod;
    }

    /**
     * @param DateTimeInterface $lastMod
     */
    public function setLastMod(DateTimeInterface $lastMod)
    {
        $this->lastMod = $lastMod;
    }

    public function accept(DriverInterface $driver)
    {
        $driver->visitSitemap($this);
    }
}
