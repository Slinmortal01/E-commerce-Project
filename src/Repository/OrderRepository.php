<?php

namespace Project\Repository;

use Project\Entity\Order;

interface OrderRepository
{
    public function createOrder(Order $order): void;
    public function getAllOrders(): array;
}
