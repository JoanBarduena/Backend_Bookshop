<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Item</title>
    <?php include "parts/meta.php"; ?>
</head>

<body>

    <?php include "parts/navbar.php"; ?>

    <div class="container">
        <div class="card soft">
            <h2>Product Item</h2>
            <p>
                This is item # <?= $_GET['id'] ?>
            </p>

            <a href="product_added_to_cart.php" class="form-button-fit">Add Item to Cart</a>
        </div>
    </div>

</body>

</html>