<?php

namespace Project\Factory;

use Project\Repository\OrderProductRepository;
use Project\Repository\OrderProductsRepositoryFromPdo;

class OrderProductRepositoryFactory
{
    public static function make(): OrderProductRepository
    {
        $pdo = require __DIR__ . '/../../config/connection.php';
        return new OrderProductsRepositoryFromPdo($pdo);
    }
}

