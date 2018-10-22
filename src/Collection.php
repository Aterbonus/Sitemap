<?php

namespace Aterbonus\Sitemap;

use Aterbonus\Sitemap\Interfaces\VisitorInterface;

abstract class Collection implements VisitorInterface
{
    /**
     * @var VisitorInterface[]
     */
    private $items = [];

    public function add(VisitorInterface $value)
    {
        $type = $this->type();

        if ($value instanceof $type) {
            $this->items[] = $value;
        } else {
            throw new \InvalidArgumentException('$value needs to be an instance of ' . $type);
        }
    }

    /**
     * @return VisitorInterface[]
     */
    public function all()
    {
        return $this->items;
    }

    abstract public function type();
}
