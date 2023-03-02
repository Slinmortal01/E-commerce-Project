<?php

namespace Project\Action;

session_name('cart');
session_start();

class AddToCartAction
{
    public function handle()
    {

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        $product = new \stdClass();
        $product->id = $_GET['id'];
        $product->name = $_GET['name'];
        $product->description = $_GET['description'];
        $product->price = $_GET['price'];
        $product->quantity = 1;

        $productArrayDuplicate = array();
        $productArray = $_SESSION['cart'];

        $found = false;
        foreach ($productArray as $pro) {
            if ($_GET['id'] == $pro->id) {
                $found = true;
                echo "$pro->name already in cart, added 1 quantity";
                $pro->quantity += 1;
            }
            $productArrayDuplicate[] = $pro;
        }

        if (!$found) {
            $productArrayDuplicate[] = $product;
            echo "$product->name added to the cart";
        }

        $_SESSION['cart'] = $productArrayDuplicate;
        require_once __DIR__ . '/../../views/catalogue.php';
    }
}
