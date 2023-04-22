<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` = " . $_GET['id'])[0];

//print_p($product);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Item</title>
    <?php include "parts/meta.php"; ?>
</head>

<body>

    <?php include "parts/navbar.php"; ?>

    <div class="container">
        <div class="grid gap">
            <div class="col-xs-12 col-md-4">
                <div class="card soft">
                    <div class="images-main">
                        <img src="img/<?= $product->thumbnail ?>">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-7">
                <div class="card soft flat">
                    <div class="card-section">
                        <h2 class="product-title"><?= $product->title ?></h2>
                        <div class="product-price">&dollar;<?= $product->price ?></div>
                    </div>

                    <div class="card-section display-flex">
                        <div class="flex-stretch">
                            <label for="product-amount" class="form-label">Amount</label>
                            <div class="form-select" id="product-amount">
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex-stretch">
                            <div class="card-section">
                                <a href="product_added_to_cart.php?id=<?= $product->id ?>" class="form-button">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card soft overview">
                    <h2>Overview</h2>
                    <p><?= $product->description ?></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>