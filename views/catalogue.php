<?php

use Project\Factory\productRepositoryFactory;

define('PAGE_TITLE', 'Catalogue');

require_once __DIR__ . '/header.php';

$repo = ProductRepositoryFactory::make();
$products = $repo->get_all();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/modern-normalize">
    <style>
        li {
            list-style-type: none;
        }

        ul {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
        }

        img {
            display: block;
            aspect-ratio: 1 / 1;
            object-fit: contain;
            max-width: 100%;
        }
    </style>
</head>

<body>

    <h1>Product Management - <?= PAGE_TITLE ?></h1>
    <ul>
        <?php
        /** @var \Project\Entity\Product $product */
        ?>

        <?php foreach ($products as $product) : ?>
            <li>
                <img src="/images/<?= random_int(1, 4) ?>.jpg" alt="Amazing"><br>
                <small style="font-size: 10px">Product ID #<?= $product->id() ?></small>
                <p>Product Name: <?= $product->product_name() ?></p>
                <p>Product Description: <?= $product->product_description() ?></p>
                <p>Product Price: $<?= $product->product_price() ?></p>
                <?=
                "<a href='/index.php?action=AddToCart&id={$product->id()}&name={$product->product_name()}&
                            description={$product->product_description()}&price={$product->product_price()}'>Add to cart</a>";
                ?>
                <br>
                <br>

            </li>
        <?php endforeach; ?>
    </ul>
    <br>

    <a href="#">Back To Top</a><br>

</body>

</html>

<?php require_once __DIR__ . '/footer.php'; ?>