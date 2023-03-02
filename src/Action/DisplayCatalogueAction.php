<?php

namespace Project\Action;

use Project\Factory\productRepositoryFactory;

class DisplayCatalogueAction
{
    public function handle(): void
    {
        $repo = productRepositoryFactory::make();
        $product = $repo->get_all();

        require_once __DIR__ . '/../../views/catalogue.php';
    }
}
