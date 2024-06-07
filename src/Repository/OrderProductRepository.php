<?php

namespace Project\Repository;

use Project\Entity\OrderProduct;

interface OrderProductRepository
{
    public function createOrderProduct(OrderProduct $orderProduct): void;
    public function getAllOrderProducts(string $idOrderProduct): array;
}