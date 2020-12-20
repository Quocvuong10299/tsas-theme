
<!--News-->
<?php
$news = [
    [
        'title' => 'Công dụng làm đẹp bất ngờ của tinh dầu Macca',
        'link' => '#',
        'image' => READYFOOD_ROOT_URL.'/images/img_7.jpg',
        'sub-title' => 'Mẹo vặt',
        'author' => 'Admin'
    ],
    [
        'title' => 'Làm thế nào để pha một ấm trà Olong thật ngon',
        'link' => '#',
        'image' => READYFOOD_ROOT_URL.'/images/img_8.jpg',

        'sub-title' => 'Mẹo vặt',
        'author' => 'Admin'
    ],
    [
        'title' => 'Cách ăn sáng giúp các nàng giảm cân siêu tốc',
        'link' => '#',
        'image' => READYFOOD_ROOT_URL.'/images/img_9.jpg',
        'sub-title' => 'Mẹo vặt',
        'author' => 'Admin'
    ],
    [
        'title' => 'Cách nấu súp tôm bí đỏ thơm ngon bổ dưỡng...',
        'link' => '#',
        'image' => READYFOOD_ROOT_URL.'/images/img_10.jpg',
        'sub-title' => 'Mẹo vặt',
        'author' => 'Admin'
    ],
]
?>
<div class="banner-news mb80
">
    <div class="image-banner-news" style="background-image: url(<?= READYFOOD_ROOT_URL.'/images/banner_9.jpg' ?>)">

        <div class="news">
            <div class="container d-flex flex-column align-items-center justify-content-center">

                <h2 class="title t-sectionNameHomepage text-white d-flex align-items-center flex-wrap color-1 mb45">
                    Tin tức
                </h2>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="image-cover image-news" style="background-image: url('./images/banner_10.jpg')">
                            <div class="news-item-big">
                                <a href="#" class="btn-mini mb-2">
                                    Sức khỏe
                                </a>
                                <h2 class="text-white t-sectionNameHomepage">
                                    Cách ăn sáng giúp các nàng giảm cân siêu tốc mà không cần nhịn ăn
                                </h2>
                                <p class="text-body text-white">
                                    Bữa sáng là bữa ăn rất quan trọng bổ sung đầy đủ chất dinh dưỡng cho cơ thể, giúp ngăn ngừa các căn bệnh về tim mạch, đột quỵ, cao huyết áp, và giúp giảm cân hiệu quả.
                                </p>
                                <div class="d-flex align-items-center "></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <?php foreach ($news as $item){ ?>
                            <a class="d-block mb30px" href="<?= $item['link']?>">
                                <div class="news-item">
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div  class="image-thumbnail pt100percent" style="background-image: url(<?= $item['image']?>)"></div>
                                        </div>
                                        <div class="col-md-8">
                                            <h6 class="t-subTitle-small t-yellow">
                                                <?= $item['sub-title'] ?>
                                            </h6>
                                            <h4 class="text-white t-titleCard">
                                                <?= $item['title']?>
                                            </h4>
                                            <h6 class="t-subTitle mb-0 t-white-70">

                                                By <?= $item['author'] ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
