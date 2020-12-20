

<div class="product overflow-hidden">
    <div class="image-product image-product-hover pt100percent mb16" style="background-image: url(<?=$item['image'] ?>)"></div>
    <h5 class="t-titleCard t-darkRed">
        <a href="#">
            <?= $item['name'] ?>
        </a>
    </h5>
    <div class="d-flex flex-wrap align-items-center">
        <p class="t-priceCard mr-2">
            <?= $item['price'] ?>
        </p>
        <p class="t-priceOrigionalCard">
            <?= $item['sale'] ?>
        </p>
    </div>
    <a class="btn btn-a" href="<?= $item['button_link'] ?>">
        <?= $item['button_title'] ?>
    </a>
</div>