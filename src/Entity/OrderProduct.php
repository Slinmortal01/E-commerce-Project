<?php

namespace Project\Entity;

class OrderProduct
{
    public ?string $product_id;
    public ?string $order_id;

    public function __construct(
        ?string $product_id = '',
        ?string $order_id = '',
    ) {
        $this->product_id = $product_id;
        $this->order_id = $order_id;

    }
    public function product_id(): string
    {
        return $this->product_id;
    }
    public function order_id(): string
    {
        return $this->order_id;
    }
}