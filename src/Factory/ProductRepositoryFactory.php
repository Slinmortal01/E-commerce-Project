<?php

namespace Project\Factory;

use Project\Repository\ProductRepository;
use Project\Repository\ProductRepositoryFromPdo;

class ProductRepositoryFactory
{
    public static function make(): ProductRepository
    {
        $pdo = require __DIR__ . '/../../config/connection.php';
        return new ProductRepositoryFromPdo($pdo);
    }
}
