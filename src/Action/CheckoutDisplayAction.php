<?php

namespace Project\Action;


class CheckoutDisplayAction
{
    public function handle()
    {
        session_name('cart');
        session_start();
        if(!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        require_once __DIR__ . '/../../views/checkout.php';
    }
}
