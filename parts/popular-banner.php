<?php
    $popularBanner = [
        [
            'image' => READYFOOD_ROOT_URL.'/images/bg_1.jpg',
            'link' => '',
        ],
        [
            'image' => READYFOOD_ROOT_URL.'/images/bg_2.jpg',
            'link' => '',
        ],
        [
            'image' => READYFOOD_ROOT_URL.'/images/bg_3.jpg',
            'link' => '',
        ],
    ];
?>
<div class="popular-banner mb45">
    <div class="container">

        <div class="row justify-content-center">
            <?php foreach ($popularBanner as $item){ ?>
                <div class="col-lg-4 col-6 mb30px">
                    <a href="<?= $item['link'] ?>">
                        <div style="background-image: url(<?= $item['image'] ?>)" class="image-product pt70percent">
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
