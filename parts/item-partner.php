<?php
    $partnerItem = [
        [
            'alt' => '',
            'img' => TSAS_ROOT_URL. '/images/doitac1.svg',
        ],
        [
            'alt' => '',
            'img' => TSAS_ROOT_URL. '/images/doitac2.svg',
        ],
        [
            'alt' => '',
            'img' => TSAS_ROOT_URL. '/images/doitac3.svg',
        ],
        [
            'alt' => '',
            'img' => TSAS_ROOT_URL. '/images/doitac4.svg',
        ],
        [
            'alt' => '',
            'img' => TSAS_ROOT_URL. '/images/doitac5.svg',
        ],
        [
            'alt' => '',
            'img' => TSAS_ROOT_URL. '/images/doitac6.svg',
        ],
        [
            'alt' => '',
            'img' => TSAS_ROOT_URL. '/images/doitac7.svg',
        ],
        [
            'alt' => '',
            'img' => TSAS_ROOT_URL. '/images/doitac8.svg',
        ],
    ]
?>


<div class="row">
    <?php
    foreach ($partnerItem as $item){
        ?>
        <div class="col-lg-3 col-md-3 col-12">
            <img class="svg" src="<?= $item['img'] ?>" alt="">
        </div>
        <?php
    }
    ?>
</div>