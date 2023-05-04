
const listItemTemplate = templater(o => `
<a class="col-xs-12 col-md-3" href="product_item.php?id=${o.id}">
    <figure class="figure product-overlay display-flex flex-column">
        <div class="flex-stretch">
            <img src="img/${o.thumbnail}" alt="thumbnail">
        </div>
        <figcaption class="flex-none">
            <div class="caption-body">
                <div >${o.title}</div>
                <div class="price">&dollar;${o.price}</div>
            </div>
        </figcaption>
    </figure>
</a>
`);