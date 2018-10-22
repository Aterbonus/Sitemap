<?php

namespace Aterbonus\Sitemap\Interfaces;

interface VisitorInterface
{
    public function accept(DriverInterface $driver);
}
