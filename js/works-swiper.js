document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.works__swiper', {
        loop: true,
        slidesPerView: 1,   // 初期はスマホ1枚
        spaceBetween: 20,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2, // タブレット以上は2枚
            },
            1024: {
                slidesPerView: 3, // PCは3枚
            }
        }
    });
});

