<?php

use Project\Entity\Product;

define('PAGE_TITLE', 'Create Product');

require_once __DIR__ . '/header.php';

?>

<link rel="stylesheet" href="https://unpkg.com/modern-normalize">

<body>
    <form action="/index.php?action=create_product" method="post">
        <label>Product Name:
            <input type="text" name="product_name" placeholder="Name..." required /><br><br>
        </label>
        <label>Product Description:
            <input type="text" name="product_description" placeholder="Description..." required /><br><br>
        </label>
        <label>Product Price:
            <input type="number" name="product_price" placeholder="Price..." required /><br><br>
        </label>
        <label>Product Quantity:
            <input type="number" name="product_quantity" placeholder="Quantity..." required /><br><br>
        </label>
        <button type="submit">Create</button>
    </form>
    <br>
    <hr />
    <br>
    <table border="1">
        <tr>
            <th width="200">Product Name</th>
            <th width="200">Product Description</th>
            <th width="200">Product Price</th>
            <th width="200">Product Quantity</th>
            <th width="200">Update</th>
            <th width="200">Delete</th>
        </tr>
        <?php
        /** @var Product $products */
        ?>
        <?php foreach ($products as $product) : ?>
            <tr>
                <td align="center"><?= $product->product_name() ?></td>
                <td align="center"><?= $product->product_description() ?></td>
                <td align="center"><?= "$" . $product->product_price() ?></td>
                <td align="center"><?= $product->product_quantity() ?></td>
                <td align="center">
                    <?=
                    "<a href='/index.php?action=update&id={$product->id()}'>Update</a>";
                    ?>
                </td>
                <td align="center">
                    <?=
                    "<a href='/index.php?action=delete&id={$product->id()}'>Delete</a>";
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

<?php require_once __DIR__ . '/footer.php' ?>