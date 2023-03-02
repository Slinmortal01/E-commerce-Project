<?php

namespace Project;

use Project\Action\AddToCartAction;
use Project\Action\CartDisplayAction;
use Project\Action\CheckoutDisplayAction;
use Project\Action\CreateProductAction;
use Project\Action\DeleteFromCartAction;
use Project\Action\DeleteProductAction;
use Project\Action\DisplayCatalogueAction;
use Project\Action\HomeAction;
use Project\Action\UpdateCartAction;
use Project\Action\UpdateProductAction;
use Project\Action\CreateOrderAction;
use Project\Action\DisplayOrderAction;
use Project\Action\DisplayOrderDetailsAction;


class app
{
    public function run(): void
    {
        $action = filter_input(INPUT_GET, 'action');

        match ($action) {
            'create_product' => (new CreateProductAction())->handle(),
            default => (new HomeAction())->handle(),
            'display_catalogue' => (new DisplayCatalogueAction())->handle(),
            'delete' => (new DeleteProductAction())->handle(),
            'update' => (new UpdateProductAction())->handle(),
            'DisplayCart' => (new CartDisplayAction())->handle(),
            'AddToCart' => (new AddToCartAction())->handle(),
            'DeleteFromCart' => (new DeleteFromCartAction())->handle(),
            'UpdateCart' => (new UpdateCartAction())->handle(),
            'checkout' => (new CheckoutDisplayAction())->handle(),
            'createOrder' => (new CreateOrderAction())->handle(),
            'displayOrder' => (new DisplayOrderAction())->handle(),
            'displayOrder2' => (new DisplayOrderDetailsAction())->handle(),
           
        };
    }
}
