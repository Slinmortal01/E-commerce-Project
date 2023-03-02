<?php

namespace Project\Entity;

class Product
{
    private ?string $id;

    public function __construct(
        private string $product_name = '',
        private string $product_description = '',
        private float $product_price = 0,
        private int $product_quantity = 0
    ) {
        $this->id = null;
        $this->product_name = $product_name;
        $this->product_description = $product_description;
        $this->product_price = $product_price;
        $this->product_quantity = $product_quantity;
    }
    public function id(): string
    {
        return $this->id;
    }
    public function product_name(): string
    {
        return $this->product_name;
    }
    public function product_description(): string
    {
        return $this->product_description;
    }
    public function product_price(): float
    {
        return $this->product_price;
    }
    public function product_quantity(): int
    {
        return $this->product_quantity;
    }
}
