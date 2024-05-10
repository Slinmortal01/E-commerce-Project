<?php

use Project\Factory\OrderProductRepositoryFactory;
use Project\Repository\ProductRepositoryFromPdo;
use Project\Repository\OrderRepositoryFromPdo;


define('PAGE_TITLE', 'Amazing Orders Details');

require_once __DIR__ . '/header.php';

$repo = OrderProductRepositoryFactory::make();
$idOrderProduct = (string)filter_input(INPUT_GET, 'id');
$orderProduct = $repo->getAllOrderProducts($idOrderProduct);

?>

<link rel="stylesheet" href="https://unpkg.com/modern-normalize">

<h1>Amazing - <?= PAGE_TITLE ?></h1>
<table border="1">
    <tr>
        <th width="200">Order ID</th>
        <th width="200">Product ID</th>
        <th width="200">Product Name</th>
        <th width="200">Product Price</th>
        <th width="200">Total</th>
        <th width="200">Checkout Date</th>
    </tr>

<?php foreach ($orderProduct as $item) : 
   $id = $item->product_id();
   $idOrder = $item->order_id();
   $order = $repo->OrdersInformation($idOrder);
   $product = $repo->ProductsInformation($id);
    ?>    <tr>
            <td align="center"><?= $item->order_id() ?></td>
            <td align="center"><?= $item->product_id() ?></td>
            <td align="center"><?= $product->product_name() ?></td>
            <td align="center"><?= $product->product_price() ?></td>
            <td align="center"><?= $order->order_total() ?></td>
            <td align="center"><?= $order->order_completed_at() ?></td>
   
        </tr>
 <?php endforeach; ?>
   
    
</table>

<?php require_once __DIR__ . '/footer.php' ?> 
