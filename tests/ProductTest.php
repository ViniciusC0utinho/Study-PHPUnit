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

        $this->assertEquals('Ps5', $product->getName());
    }

    #[Test]
    public function price_is_set(): void
    {
        $product = new Product;

        $product->setPrice('10.00');

        $this->assertEquals(10.00, $product->getPrice());
    }
}
