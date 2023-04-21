<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product List</title>
    <?php include "parts/meta.php"; ?>
</head>

<body>

    <?php include "parts/navbar.php"; ?>

    <div class="container">
        <div class="card soft">
            <h2>Product List</h2>
            <!-- <ul>
                <li><a href="product_item.php?id=1">Product 1</a></li>
                <li><a href="product_item.php?id=2">Product 2</a></li>
                <li><a href="product_item.php?id=3">Product 3</a></li>
                <li><a href="product_item.php?id=4">Product 4</a></li>
            </ul> -->

            <?php

            include_once "lib/php/functions.php";
            include_once "parts/templates.php";

            $result = makeQuery(
                makeConn(),
                "SELECT * 
                FROM `products`
                ORDER BY `date_create` DESC
                LIMIT 12"
            );

            echo "<div class='grid gap'>", array_reduce($result, 'productListTemplate'), "</div>";

            ?>


        </div>
    </div>

</body>

</html>