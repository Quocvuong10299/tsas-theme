(function ($) {
    $(document).ready(function ($) {
        $('.banner__slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            speed: 500,
            dots: true,
            // prevArrow: '<div class="slick-arrow slick-prev"><img src="./images/prev-arrow.svg" alt="Arrow Prev"></div>',
            // nextArrow: '<div class="slick-arrow slick-next"><img src="./images/next-arrow.svg" alt="Arrow Next"></div>',
            prevArrow: false,
            nextArrow: false,
            customPaging: function (slick, index) {
                return "<span></span>";
            }
        })
    });
    checkPath();
})(jQuery);

function checkPath() {
    let pathname = window.location.href;
    if(pathname === 'http://localhost/tsas/static/'){
        $('.footer').hide();
    }
}