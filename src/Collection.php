<?php declare(strict_types=1);

namespace Thepixeldeveloper\Sitemap;

use Thepixeldeveloper\Sitemap\Interfaces\VisitorInterface;

abstract class Collection implements VisitorInterface
{
    private $items;

    public function add($value): void
    {
        $type = $this->type();

        if ($value instanceof $type) {
            $this->items[] = $value;
        }

        throw new \InvalidArgumentException('$value needs to be an instance of ' . $type);
    }

    public function all(): array
    {
        return $this->items;
    }

    abstract public function type(): string;
}