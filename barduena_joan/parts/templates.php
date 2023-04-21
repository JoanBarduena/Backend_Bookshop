<?php

function productListTemplate($r, $o)
{
    return $r . <<<HTML
    <a class="col-xs-12 col-md-3" href="product_item.php">
        <figure class="figure product display-flex flex-column">
            <div class="flex-stretch">
                <img src="img/$o->thumbnail" alt="">
            </div>
            <figcaption class="flex-none">
                <div>&dollar;$o->price</div>
                <div>$o->title</div>
            </figcaption>
        </figure>
    </a>
    HTML;
}
