<?php

namespace Aterbonus\Sitemap;

use Aterbonus\Sitemap\Interfaces\VisitorInterface;

abstract class ChunkedCollection
{
    const LIMIT = 50000;

    /**
     * @var Collection[]
     */
    private $collections;

    /**
     * @var int
     */
    private $count;

    /**
     * SitemapSplitter constructor.
     */
    public function __construct()
    {
        $this->collections = [];
        $this->count = 0;
    }

    public function add(VisitorInterface $visitor)
    {
        if ($this->count === 0 || $this->count === self::LIMIT) {
            $this->count = 0; $this->collections[] = $this->getCollectionClass();
        }

        $this->collections[count($this->collections) - 1]->add($visitor);
        $this->count++;
    }

    /**
     * @return Collection[]
     */
    public function getCollections()
    {
        return $this->collections;
    }

    abstract protected function getCollectionClass();
}
