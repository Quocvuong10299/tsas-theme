
<div class="row item align-items-center">
    <div class="col-sm-1">
        <a href="#">
            <img class="svg" src="./images/ic-delete.svg" alt="Delete item">
        </a>
    </div>
    <div class="col-sm-2">
        <img src="<?=$item['image']?>" alt="Product">
    </div>
    <div class="col-sm-5">
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
        <div class="quantity">

            <input class="form-number" type="number" value="<?=$item['amount']?>">
        </div>
    </div>
</div>