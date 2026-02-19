document.addEventListener('DOMContentLoaded', function () {

    const swiper = new Swiper('.works__swiper', {

        loop: true,

        slidesPerView: 'auto',
        centeredSlides: true,

        spaceBetween: 40,

        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        speed: 800,

        effect: 'coverflow',

        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 150,
            modifier: 1.5,
            slideShadows: false,
        },

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });

});


