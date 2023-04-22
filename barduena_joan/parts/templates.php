<?php

function productListTemplate($r, $o)
{
    return $r . <<<HTML
    <!-- <a class="col-xs-12 col-md-3" href="product_item.php?id=$o->id">
        <figure class="figure product display-flex flex-column">
            <div class="flex-stretch">
                <img src="img/$o->thumbnail" alt="">
            </div>
            <figcaption class="flex-none">
                <div>&dollar;$o->price</div>
                <div>$o->title</div>
            </figcaption>
        </figure>
    </a> -->

    <a class="col-xs-12 col-md-3" href="product_item.php?id=$o->id">
        <figure class="figure product-overlay display-flex flex-column">
            <div class="flex-stretch">
                <img src="img/$o->thumbnail" alt="$o->thumbnail">
            </div>
            <figcaption class="flex-none">
                <div class="caption-body">
                    <div >$o->title</div>
                    <div class="price">&dollar;$o->price</div>
                </div>
            </figcaption>
        </figure>
    </a>
    HTML;
}

function cartListTemplate($r, $o)
{
    return $r . <<<HTML
    <div class="display-flex">
        <div class="flex-none">
            <div class="images-thumb">
                <img src="img/$o->thumbnail" alt="$o->thumbnail">
            </div>
        </div>
        
        <div class="flex-stretch cart-title">
            <strong>$o->title</strong>
            <div>Delete</div>
        </div>
        <div class="flex-none">
            &dollar;$o->price
        </div>
    </div>
    HTML;
}
