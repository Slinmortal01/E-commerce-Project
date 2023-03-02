<?php

namespace Project\Factory;

use Project\Repository\OrderRepository;
use Project\Repository\OrderRepositoryFromPdo;

class OrderRepositoryFactory
{
    public static function make(): OrderRepository
    {
        $pdo = require __DIR__ . '/../../config/connection.php';
        return new OrderRepositoryFromPdo($pdo);
    }
}
