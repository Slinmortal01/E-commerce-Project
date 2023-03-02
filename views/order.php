<?php

use Project\Factory\OrderRepositoryFactory;

define('PAGE_TITLE', 'Orders');

require_once __DIR__ . '/header.php';

$repo = OrderRepositoryFactory::make();
$orders = $repo->getAllOrders();

?>

<link rel="stylesheet" href="https://unpkg.com/modern-normalize">

<h1>Beverage Management - <?= PAGE_TITLE ?></h1>
<table border="1">
    <tr>
        <th width="200">Order ID</th>
        <th width="200">Order Total</th>
        <th width="200">Order Checkout Date</th>
        <th width="200">Details</th>
    </tr>
    <?php foreach ($orders as $order) : ?>
        <tr>
            <td align="center"><?= $order->order_id() ?></td>
            <td align="center"><?= "$" . $order->order_total() ?></td>
            <td align="center"><?= $order->order_completed_at() ?></td>
            <td align="center">
                    <?=
                    "<a href='/index.php?action=displayOrder2&id={$order->order_id()}'> Details </a>";
                    ?>
                </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once __DIR__ . '/footer.php' ?>