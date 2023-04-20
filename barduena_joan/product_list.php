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
            <ul>
                <li><a href="product_item.php?id=1">Product 1</a></li>
                <li><a href="product_item.php?id=2">Product 2</a></li>
                <li><a href="product_item.php?id=3">Product 3</a></li>
                <li><a href="product_item.php?id=4">Product 4</a></li>
            </ul>

            <?php

            $host = "localhost";
            $username = "barduena-backend";
            $pass = "barduena-backend";
            $database = "barduena-backend";

            $conn = new mysqli($host, $username, $pass, $database);

            if ($conn->connect_errno) die($conn->connect_error);

            $result = $conn->query("SELECT * FROM `products`");

            if ($conn->errno) die($conn->error);

            while ($row = $result->fetch_object()) {
                echo "<div>$row->price</div>";
            }

            ?>


        </div>
    </div>

</body>

</html>