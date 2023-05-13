<?php

include "../lib/php/functions.php";

$empty_product = (object) [
    "title" => "",
    "author" => "",
    "description" => "",
    "category" => "",
    "thumbnail" => "",
    "price" => ""
];

//TEMPLATES

function productListItem($r, $o)
{
    return $r . <<<HTML
    <div class="card soft">
        <div class="display-flex">
            <div class="flex-none image-thumb">
                <img src="img/$o->thumbnail" alt="">
            </div>
            <div class="flex-stretch" style="padding:1em">$o->title</div>
            <div class="flex-none">
                <a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button">Edit</a>
            </div>
        </div>
    </div>
    HTML;
}

function showProductPage($o)
{
    $id = $_GET['id'];
    $add_or_edit = $id == "new" ? "Add" : "Edit";
    $create_or_update = $id == "new" ? "create" : "update";
    $images = explode(",", $o->images);


    $display = <<<HTML

    <div>
        <h2>$o->title</h2>
        <div class="form-control">
            <label class="form-label">Author</label>
            <span>$o->author</span>
        </div>
        <div class="form-control">
            <label class="form-label">Price</label>
            <span>&dollar;$o->price</span>
        </div>
        <div class="form-control">
            <label class="form-label">Category</label>
            <span>$o->category</span>
        </div>
        <div class="form-control">
            <label class="form-label">Thumbnail</label>
            <span class="image-thumb"><img src='img/$o->thumbnail'></span>
        </div>
        <div class="form-control">
            <label class="form-label">Description</label>
            <span>$o->description</span>
        </div>
    </div>

    HTML;


    $form = <<<HTML

    <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$create_or_update">
        <h2>$add_or_edit User</h2>
        <div class="form-control">
            <label class="form-label" for="user-title">Title</label>
            <input type="text" placeholder="Enter Product Title" class="form-input" name="user-title" id="user-title" value="$o->title">
        </div>
        <div class="form-control">
            <label class="form-label" for="user-author">Author</label>
            <input type="text" placeholder="Enter Product Author" class="form-input" name="user-author" id="user-author" value="$o->author">
        </div>
        <div class="form-control">
            <label class="form-label" for="user-price">Price</label>
            <input type="number" min="0" max="1000" step="0.01" placeholder="Enter Product Price" class="form-input" name="user-product" id="user-product" value="$o->price">
        </div>
        <div class="form-control">
            <label class="form-label" for="user-title">Category</label>
            <input type="text" placeholder="Enter Product Category" class="form-input" name="user-category" id="user-category" value="$o->category">
        </div>
        <div class="form-control">
            <label class="form-label" for="user-title">Description</label>
            <textarea placeholder="Enter Product Description" class="form-input" name="user-description" id="user-description">$o->description</textarea>
        </div>
        <div class="form-control">
            <label class="form-label" for="user-thumbnail">Thumbnail</label>
            <input type="text" placeholder="Enter Product Thumbnail" class="form-input" name="user-thumbnail" id="user-thumbnail" value="$o->thumbnail">
        </div>
        <div class="form-control">
            <button type="submit" class="form-button form-control" name="formSubmit">Save Changes</button>
        </div>
    </form>
        
    HTML;

    $output = $id == "new" ? "<div class='card soft'>$form</div>" :
        "<div class='grid gap'>
            <div class='col-xs-12 col-md-7'><div class='card soft'>$display</div></div>
            <div class='col-xs-12 col-md-5'><div class='card soft'>$form</div></div>
        </div>
        ";

    $delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

    echo <<<HTML

    <div class="card soft">
        <nav class="display-flex">
            <div class="flex-stretch"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
            <div class="flex-none"></a>$delete</div>
        </nav>
    </div>
    $output
    HTML;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Admin Page</title>
    <?php include "../parts/meta.php"; ?>
</head>

<body>
    <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <h1>Product Admin</h1>
            </div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add new product</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <?php
        if (isset($_GET['id'])) {
            showProductPage(
                $_GET['id'] == "new" ?
                    $empty_product :
                    makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=" . $_GET['id'])[0]
            );
        } else {
        ?>
            <h2>Product List</h2>
            <?php
            $result = makeQuery(makeConn(), "SELECT * FROM `products`");
            echo array_reduce($result, 'productListItem');
            ?>
        <?php
        }
        ?>
    </div>
</body>