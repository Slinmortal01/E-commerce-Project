<?php

namespace Project\Repository;

use Project\Entity\Product;

interface ProductRepository
{
    public function create(Product $product): void;
    public function get_all(): array;
    public function find(string $id): Product;
    public function update();
    public function delete($id): void;
}
