<?php

function productListTemplate($r, $o)
{
    return $r . <<<HTML
    <div class="col-xs-12 col-md-3">
        <figure class="figure product purple">
            <img src="img/$o->thumbnail" alt="">
            <figcaption>
                <div>$o->title</div>
                <div>$o->price</div>
            </figcaption>
        </figure>
    </div>
    HTML;
}
