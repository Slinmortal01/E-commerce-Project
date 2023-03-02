<?php

namespace Project\Repository;

use Project\Entity\Order;
use PDO;

class OrderRepositoryFromPdo implements OrderRepository
{
    public function __construct(private PDO $pdo)
    {
    }
    public function createOrder(Order $order): void
    {
        $stmt = $this->pdo->prepare(<<<SQL
        INSERT INTO orders
        (order_id, order_total, order_completed_at)
        VALUES
        (:order_id, :order_total, :order_completed_at)
        SQL);

        $orderId = $order->order_id();

        $params = [
            ':order_id' => $orderId,
            ':order_total' => $order->order_total(),
            ':order_completed_at' => $order->order_completed_at(),
        ];

        $stmt->execute($params);
    }
    public function getAllOrders(): array
    {
        $stmt = $this->pdo->prepare(<<<SQL
        SELECT * FROM orders
        SQL);

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Order::class);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
