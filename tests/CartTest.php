<?php

namespace Vinicius\PhpUnit;

use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function test_get_items(): void
    {
        $cart = new Cart;

        $this->assertIsArray($cart->getItems());
    }

    public function test_add_item_to_cart(): void
    {
        $cart = new Cart;

        $product = (new Product)
            ->setName('Mouse Logitech')
            ->setPrice(10.00);

        $cart->addItem($product);

        $this->assertContains($product, $cart->getItems());
    }

    public function test_remove_item_from_cart(): void
    {
        $cart = new Cart;

        $productOne = (new Product)->setName('Mouse Logitech')->setPrice(10.00);

        $productTwo = (new Product)->setName('Teclado Logitech')->setPrice(80.00);

        $cart->addItem($productOne);
        $cart->addItem($productTwo);

        $cart->removeItem($productOne);

        $this->assertNotContains($productOne, $cart->getItems());
    }

    public function test_remove_all_items_from_cart(): void
    {
        $cart = new Cart;

        $cart->clear();

        $this->assertEmpty($cart->getItems());
    }

    public function test_calculate_total(): void
    {
        $cart = new Cart;

        $productOne = (new Product)->setName('Mouse Logitech')->setPrice(10.00);
        $productTwo = (new Product)->setName('Teclado Logitech')->setPrice(65.99);

        $cart->addItem($productOne);
        $cart->addItem($productTwo);

        $total = [$productOne->getPrice(), $productTwo->getPrice()];

        $this->assertEquals(array_sum($total), $cart->getTotal());
    }
}
