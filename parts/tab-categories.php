<?php
    $categoriesProduct = [
        [
            'title' => 'Trái cây',
            'icon' => READYFOOD_ROOT_URL. '/images/ic-trai-cay.svg',
            'color' => '#EA6D26'
        ],
        [
            'title' => 'Nấm tươi',
            'icon' => READYFOOD_ROOT_URL. '/images/ic-nam.svg',
            'color'=>'#BB8B11'
        ],
        [
            'title' => 'trà hoa',
            'icon' => READYFOOD_ROOT_URL. '/images/ic-tra-hoa.svg',
            'color'=>'#86B50F'
        ],
        [
            'title' => 'rau xanh',
            'icon' => READYFOOD_ROOT_URL. '/images/ic-rau-xanh.svg',
            'color' => '#298200'
        ],
    ]
?>
<div class="categories-tab mb80">
    <div class="container">
        <div class="row">
            <?php foreach ($categoriesProduct as $item){ ?>
                <?php
                    include_once(READYFOOD_ROOT_URL.'/parts/item-partner.php');
                ?>
            <?php } ?>
        </div>
    </div>
</div>
