<?php

namespace Project\Entity;

class Order
{
    private ?string $order_id;
    private float $order_total;
    private string $order_completed_at;

    public function __construct(
        ?string $id = '',
        private float $orderTotal = 0,
        private string $order_checkout_date = '',
    ) {
        $this->order_id = $id;
        $this->order_total = $orderTotal;
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
