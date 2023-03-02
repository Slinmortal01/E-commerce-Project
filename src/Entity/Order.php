<?php

namespace Project\Entity;

class Order
{
    private ?string $id;

    public function __construct(
        ?string $id = '',
        private float $order_total = 0,
        private string $order_checkout_date = '',
    ) {
        $this->order_id = $id;
        $this->order_total = $order_total;
        $this->order_completed_at = $order_checkout_date;
    }
    public function order_id(): string
    {
        return $this->order_id;
    }
    public function order_total(): float
    {
        return $this->order_total;
    }
    public function order_completed_at(): string
    {
        return $this->order_completed_at;
    }
}
