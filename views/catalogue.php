<?php

use Project\Factory\productRepositoryFactory;

define('PAGE_TITLE', 'Catalogue');

require_once __DIR__ . '/header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="main-catalogue">
        <div class="catalogue-banner-container">
            <img src="images/bannerfretegratis.png" alt="Banner">
        </div>
        <div class="catalogue-product-list">
            <div class="catalogue-product-card">
                <img src="images/2.jpg" alt="Product Image">
                <div class="catalogue-productTitle-container">
                    <h3>Echo Pop, Smart speaker compacto, Alexa - Preto</h3>
                    <div class="catalogue-stars-container">
                        <img src="images/star.png" alt="star-rate" class="starImg">
                        <img src="images/star.png" alt="star-rate" class="starImg">
                        <img src="images/star.png" alt="star-rate" class="starImg">
                        <img src="images/star.png" alt="star-rate" class="starImg">
                        <img src="images/star.png" alt="star-rate" class="starImg">
                        <p>5.0</p>
                    </div>
                </div>
                <div class="catalogue-price-container">
                    <div class="purchaseAction">
                        <p>R$75,00</p>
                        <a href="cart.php" class="purchaseBtn">
                            <img src="images/botao-adicionar.png" alt="botaoAdicionarAoCarrinho">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<?php require_once __DIR__ . '/footer.php'; ?>
