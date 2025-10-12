// Carruseles con desplazamiento automático hacia la izquierda
document.querySelectorAll('.swiper.autoLeft').forEach(el => {
    new Swiper(el, {
        slidesPerView: 1.2,
        spaceBetween: 12,
        breakpoints: {
            576: { slidesPerView: 2 },
            768: { slidesPerView: 2.5 },
            992: { slidesPerView: 3 }
        },
        loop: true,
        speed: 6000, // velocidad del desplazamiento
        autoplay: {
            delay: 0, // sin pausa entre slides
            disableOnInteraction: false,
            reverseDirection: false // izquierda
        },
        allowTouchMove: true,
        freeMode: { enabled: true, momentum: false }
    })
})
