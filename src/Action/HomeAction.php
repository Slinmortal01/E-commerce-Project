<?php

namespace Project\Action;

use Project\Factory\productRepositoryFactory;

class HomeAction
{
    public function handle(): void
    {
        $repo = productRepositoryFactory::make();
        $products = $repo->get_all();

        require_once __DIR__ . '/../../views/home.php';
    }
}
