<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product List</title>
    <?php include "parts/meta.php"; ?>


    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script>
        query({
            type: 'products_all'
        }).then(d => {
            $(".productlist").html(listItemTemplate(d.result))
        });
    </script>
</head>

<body>

    <?php include "parts/navbar.php"; ?>

    <div class="container">
        <h2>Product List</h2>

        <div class="form-control">
            <form class="hotdog light">
                <input type="search" placeholder="Search products">
            </form>
        </div>

        <div class="productlist grid gap"></div>
    </div>

</body>

</html>