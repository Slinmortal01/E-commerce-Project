<?php

namespace Project\Action;

use Project\Entity\Product;
use Project\Factory\ProductRepositoryFactory;

class CreateProductAction
{
    public function handle(): void
    {
        $product = new Product(
            filter_input(INPUT_POST, 'product_name'),
            filter_input(INPUT_POST, 'product_description'),
            filter_input(INPUT_POST, 'product_price'),
            filter_input(INPUT_POST, 'product_quantity')
        );
        $repo = ProductRepositoryFactory::make();
        $repo->create($product);

        header('Location: /index.php');
    }
}
