<?php

namespace Project\Action;

class DisplayOrderAction
{
    public function handle(): void
    {
        require_once __DIR__ . '/../../views/order.php';
    }
}
