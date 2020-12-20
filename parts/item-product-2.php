
<div class="product overflow-hidden mb16">
        <div class="row align-items-center">
            <div class="col-sm-5">

                <div class="image-product image-product-hover pt100percent mb16" style="background-image: url(<?=$item['image'] ?>)"></div>
            </div>
            <div class="col-sm-7">

                <h5 class="t-titleCard mb-0">
                    <?= $item['name'] ?>
                </h5>
                <div class="d-flex flex-wrap align-items-center mb-2">
                    <p class="t-priceCard mr-2 mb-0">
                        <?= $item['price'] ?>
                    </p>
                    <p class="t-priceOrigionalCard mb-0">
                        <?= $item['sale'] ?>
                    </p>
                </div>
                <a class="btn btn-mini text-uppercase" href="<?= $item['button_link'] ?>">
                    <?= $item['button_title'] ?>
                </a>
            </div>
        </div>
    </div>