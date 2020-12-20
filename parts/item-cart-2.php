
<div class="row item align-items-center">
    <div class="col-sm-2">
        <img src="<?=$item['image']?>" alt="Product">
    </div>
    <div class="col-sm-6">
        <h5 class="t-titleCard">
            <?=$item['title']?>
        </h5>
    </div>
    <div class="col-sm-2">
        <h4 class="t-priceCard mb-0">
            <?=$item['new_price']?>
        </h4>
        <h6 class="t-priceOrigionalCard">
            <?=$item['old_price']?>
        </h6>
        <span class="d-inline-block btn-mini">
                        <?=$item['sale']?>
                        </span>
    </div>
    <div class="col-sm-2">
        <div class="quantity text-center t-quantity">
            <?=$item['amount']?>
        </div>
    </div>
</div>