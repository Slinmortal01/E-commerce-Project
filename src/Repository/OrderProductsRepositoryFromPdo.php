<?php

namespace Project\Repository;

use Project\Entity\OrderProduct;
use Project\Entity\Product;
use Project\Entity\Order;
use Project\Repository\OrderProductRepository;
use PDO;

class OrderProductsRepositoryFromPdo implements OrderProductRepository
{
    public function __construct(private PDO $pdo)
    {
    }
    public function createOrderProduct(OrderProduct $orderProduct): void
    {
        $stmt = $this->pdo->prepare(<<<SQL
        INSERT INTO order_items
        (order_id, product_id)
        VALUES
        (:order_id, :product_id)
        SQL);

        $orderId = $orderProduct->order_id();
        $productId = $orderProduct->product_id();

        $params = [
            ':order_id' => $orderId,
            ':product_id' => $productId
        ];

        $stmt->execute($params); 
    } 
    public function getAllOrderProducts(string $idOrderProduct): array
    {
        $stmt = $this->pdo->prepare(<<<SQL
        SELECT order_id, product_id 
        FROM order_items
        WHERE order_id=:get_order
        SQL);

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, OrderProduct::class);
        $stmt->bindParam(':get_order', $idOrderProduct);
        $stmt->execute();

        return $stmt->fetchAll(); 
    } 
    public function ProductsInformation(string $id): Product
    {
        $stm = $this->pdo->prepare(<<<SQL
            SELECT id, product_name, product_description, product_price, product_quantity
            FROM products
            WHERE id=:id
        SQL);
        

        $stm->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, Product::class);
        $stm->bindParam(':id', $id);
        $stm->execute();

        return $stm->fetch();
    }
    public function OrdersInformation(string $idOrder): Order
    {
        $stm = $this->pdo->prepare(<<<SQL
            SELECT order_id, order_total, order_completed_at
            FROM orders
            WHERE order_id=:id
        SQL);
        

        $stm->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, Order::class);
        $stm->bindParam(':id', $idOrder);
        $stm->execute();

        return $stm->fetch();
    }
    
}
