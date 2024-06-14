<?php

use Project\Factory\OrderProductRepositoryFactory;
use Project\Repository\ProductRepositoryFromPdo;
use Project\Repository\OrderRepositoryFromPdo;

define('PAGE_TITLE', 'Amazing Orders Details');

require_once __DIR__ . '/header.php';

$idOrderProduct = (string)filter_input(INPUT_GET, 'id');

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="main-orderdetails">
        <div class="orderdetails-progress-container">
            <div class="orderdetails-images-container">
                <img src="images/iconecompra.png" alt="icone_compra">
                <img src="images/iconepag.png" alt="icone_pagamento">
                <img src="images/iconepedidoenv.png" alt="icone_pedidoEnviado">
                <img src="images/iconeentrega.png" alt="icone_entrega">
            </div>
            <div class="orderdetails-checkLine">
                <div class="orderdetails-checkItem">
                    <p>Pedido Realizado</p>
                    <img src="images/verificadocinza.png" alt="verificado-cinza">
                </div>
                <div class="orderdetails-checkItem">
                    <p>Pagamento Efetuado</p>
                    <img src="images/verificadocinza.png" alt="verificado-cinza">
                </div>
                <div class="orderdetails-checkItem">
                    <p>Pedido Enviado</p>
                    <img src="images/verificadocinza.png" alt="verificado-cinza">
                </div>
                <div class="orderdetails-checkItem">
                    <p>Pedido Entregue</p>
                    <img src="images/verificadoverde.png" alt="verificado-cinza">
                </div>
            </div>
            <div class="home-product-category-division">
                    <img src="images/minus-big-symbol.png" alt=""><span></span>
                <h2>Detalhes dos Pedidos</h2>
                <span></span><img src="images/minus-big-symbol.png" alt="">
            </div>
            <div class="grid-container">
                <div class="grid-item grid-header">ID do Pedido</div>
                <div class="grid-item grid-header">ID do Produto</div>
                <div class="grid-item grid-header">Nome do Produto</div>
                <div class="grid-item grid-header">Preço do Produto</div>
                <div class="grid-item grid-header">Total</div>
                <div class="grid-item grid-header">Data da Compra</div>

                    <div class="grid-item">1</div>
                    <div class="grid-item">2</div>
                    <div class="grid-item" style="text-align: left; padding-left: 10px;">
                        Rato de borracha
                    </div>
                    <div class="grid-item">129,99</div>
                    <div class="grid-item">2000,00</div>
                    <div class="grid-item">13/06/2024</div>
            </div>
        </div>
    </main>
</body>

<?php require_once __DIR__ . '/footer.php'; ?>
