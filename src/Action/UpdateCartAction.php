<?php

namespace Project\Action;

use Project\Factory\ProductRepositoryFactory;

session_name('cart');
session_start();

class UpdateCartAction
{
    public function handle()
    {
        if (isset($_POST['id']) && $_POST['name'] && $_POST['description'] && $_POST['price'] && $_POST['quantity']) {

            $productArrayUpdated = array();

            $productArray = $_SESSION['cart'];
            foreach ($productArray as $pro){
                if($_POST['id'] === $pro->id){
                    $pro->quantity = $_POST['quantity'];
                }
                $productArrayUpdated[] = $pro;
            }
            $_SESSION['cart'] = $productArrayUpdated;

            require_once __DIR__ . '/../../views/cart.php';
        } else {

            $id = (string)filter_input(INPUT_GET, 'id');

            $productRepository = ProductRepositoryFactory::make();
            $product = $productRepository->find($id);


            require_once __DIR__ . '/../../views/updateCart.php';
        }
    }
}
