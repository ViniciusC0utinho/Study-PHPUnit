<?php

declare(strict_types=1);

namespace Vinicius\PhpUnit;

class Cart
{
    protected array $items = [];
    public function getItems(): array
    {
        return $this->items;
    }

    public function getTotal(): float
    {
        $items = array_map(function (Product $product): float {
            return $product->getPrice();
        }, $this->items);

        return array_sum($items);
    }

    public function addItem(Product $product): void
    {
        $this->items[$product->getId()] = $product;
    }

    public function removeItem(Product $product): void
    {
        unset($this->items[$product->getId()]);
    }

    public function clear(): void
    {
        $this->items = [];
    }
}
