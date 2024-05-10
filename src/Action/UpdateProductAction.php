<?php

namespace Project\Action;


use Project\Factory\ProductRepositoryFactory;

class UpdateProductAction
{
    public function handle()
    {
        if (isset($_POST['id']) && $_POST['name'] && $_POST['description'] && $_POST['price'] && $_POST['quantity']) {

            $productParams = [
                $id = $_POST['id'],
                $name = $_POST['name'],
                $description = $_POST['description'],
                $price = $_POST['price'],
                $quantity = $_POST['quantity'],
            ];

            $productRepository = ProductRepositoryFactory::make();
            $productRepository->update();

            header('Location: index.php');
        }
        $id = (string)filter_input(INPUT_GET, 'id');

        $productRepository = ProductRepositoryFactory::make();
        $product = $productRepository->find($id);

        require_once __DIR__ . '/../../views/update.php';
    }

}
