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
    <script src="js/product_list.js"></script>
</head>

<body>

    <?php include "parts/navbar.php"; ?>

    <div class="container">
        <h2>Product List</h2>

        <div class="form-control">
            <form class="hotdog light" id="product-search">
                <input type="search" placeholder="Search products">
            </form>
        </div>
        <div class="form-control">
            <div class="card soft">
                <div class="display-flex">
                    <div class="flex-stretch display-flex">
                        <div class="flex-none" style="padding-right: 1em">
                            <button data-filter="category" data-value="" type="button" class="form-button light">All</button>
                        </div>
                        <div class="flex-none" style="padding-right: 1em">
                            <button data-filter="category" data-value="Fiction" type="button" class="form-button light">Fiction</button>
                        </div>
                        <div class="flex-none" style="padding-right: 1em">
                            <button data-filter="category" data-value="Fantasy" type="button" class="form-button light">Fantasy</button>
                        </div>
                        <div class="flex-none" style="padding-right: 1em">
                            <button data-filter="category" data-value="Romance" type="button" class="form-button light">Romance</button>
                        </div>
                        <div class="flex-none" style="padding-right: 1em">
                            <button data-filter="category" data-value="Horror" type="button" class="form-button light">Horror</button>
                        </div>
                    </div>

                    <div class="flex-none">
                        <div class="form-select">
                            <select class="js-sort">
                                <option value="1">Newest</option>
                                <option value="2">Oldest</option>
                                <option value="3">Least Expensive</option>
                                <option value="4">Most Expensive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="productlist grid gap"></div>
    </div>

</body>

</html>