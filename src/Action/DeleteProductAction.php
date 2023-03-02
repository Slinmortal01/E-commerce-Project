<?php

namespace Project\Action;

use PDOException;
use Project\Factory\ProductRepositoryFactory;


class DeleteProductAction
{
    public function handle(): void
    {
        $id = (string)filter_input(INPUT_GET, 'id');
        try {
            $productRepository = ProductRepositoryFactory::make();
            $product = $productRepository->find($id);
            $productRepository->delete($product);

            header('Location: /index.php');
        }catch (PDOException $exception) {
            error_log($exception);
            echo <<<HTML
            <meta http-equiv="refresh" content="2; url='/index.php'" />
            HTML;
            echo "<b><i>Unable to delete a product that is present inside an order!</b></i>";
        }
    }
}
