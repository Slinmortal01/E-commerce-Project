<?php

namespace Project\Action;

session_name('cart');
session_start();

class DeleteFromCartAction
{
    public function handle()
    {
        $id = (string)filter_input(INPUT_GET, 'id');

        $productArrayDeleted = array();

        $productArray = $_SESSION['cart'];

        foreach ($productArray as $pro){
            if($id != $pro->id){
                $productArrayDeleted[] = $pro;
            }
            $_SESSION['cart'] = $productArrayDeleted;
        }

        require_once __DIR__ . '/../../views/cart.php';

    }
}
