<?php

namespace Vinicius\PhpUnit;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * Sempre herde a classe de testes PHPUnit\Framework\TestCase.
 * Escreva os nomes dos métodos utilizando snake_case.
 */
class ProductTest extends TestCase
{
    #[Test]
    public function name_is_set(): void
    {
        $product = new Product;

        $product->setName('PS5');

        $this->assertEquals('PS5', $product->getName());
    }

    #[Test]
    public function slug_is_set(): void
    {
        $product = new Product;

        $product->setSlug('console-ps5-promo');

        $this->assertEquals('console-ps5-promo', $product->getSlug());
    }
}
