<?php

namespace Project\Action;

class DisplayOrderDetailsAction
{
    public function handle(): void
    {
        require_once __DIR__ . '/../../views/orderdetails.php';
    }
}
// order details its pending 