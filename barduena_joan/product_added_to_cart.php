<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` = " . $_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cart</title>
    <?php include "parts/meta.php"; ?>
</head>

<body>
    <?php include "parts/navbar.php"; ?>
    <div class="container">
        <div class="card soft">
            <h2><?= $product->title ?> <span style="font-weight:normal;">has been added to your cart.</span></h2>
            <p>There are now <?= $cart_product->amount ?> of <strong><?= $product->title ?></str> in your cart.</p>
            <div class="display-flex">
                <div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
                <div class="flex-stretch"></div>
                <div class="flex-none"><a href="product_cart.php">Go To Cart</a></div>
            </div>
        </div>
    </div>

</body>

</html>