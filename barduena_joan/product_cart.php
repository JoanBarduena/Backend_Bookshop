<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (1,2,3)");
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
        <h2>Cart</h2>
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    <?= array_reduce($cart, 'cartListTemplate') ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="card soft flat">
                    <div class="card-section display-flex">
                        <div class="flex-stretch"><strong>Subtotal</strong></div>
                        <div class="flex-none">&dollar;18.50</div>
                    </div>
                    <div class="card-section display-flex">
                        <div class="flex-stretch"><strong>Taxes</strong></div>
                        <div class="flex-none">&dollar;2.50</div>
                    </div>
                    <div class="card-section display-flex">
                        <div class="flex-stretch"><strong>Total</strong></div>
                        <div class="flex-none">&dollar;21.00</div>
                    </div>
                    <div class="card-section display-flex">
                        <a href="product_checkout.php" class="form-button form-control">Checkout</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>