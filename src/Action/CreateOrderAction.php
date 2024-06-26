<?php

namespace Project\Action;

use Project\Entity\Order;
use Project\Factory\OrderRepositoryFactory;
use Project\Entity\OrderProduct;
use Project\Factory\OrderProductRepositoryFactory;

session_name('cart');
session_start();

class CreateOrderAction
{
    public function handle(): void
    {
        $product = $_SESSION['cart'];
        if(!isset($product)){
            header('Location: index.php');
            die;
        }
        $orderId = uniqid('id', true);

        $order = new Order(
            $orderId,
            filter_input(INPUT_GET, 'order_total'),
            filter_input(INPUT_GET, 'order_checkout_date'),
        );

        $repo = OrderRepositoryFactory::make();
        $repo->createOrder($order);

        

        foreach($product as $item){
        $productId = $item->id;
        $orderProduct = new OrderProduct();
        $orderProduct->order_id = $orderId;
        $orderProduct->product_id = $productId;
        $repository = OrderProductRepositoryFactory::make();
        $repository->createOrderProduct($orderProduct);

        }

        session_destroy();

        require_once __DIR__ . '/../../views/order.php';
    }
}
