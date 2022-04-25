jQuery(function () {
    jQuery(".single-item").slick({
        autoplay: false,
        autoplaySpeed: 4000,
        prevArrow:
            '<button type="button" class="slick-prev"><ion-icon name="arrow-back-circle-outline"></ion-icon></button>',
        nextArrow:
            '<button type="button" class="slick-next"><ion-icon name="arrow-forward-circle-outline"></ion-icon></button>',
    });
});
