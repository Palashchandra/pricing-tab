//pricing slider js
var swiper = new Swiper(".ch_pricing_slider", {
    slidesPerView: 4,
    loop: false,
    spaceBetween: 30,
    pagination: {
        el: '.pricing_pagination',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        576: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        1024: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
        }
    }
});
//pricing part css
var pricingPart = $('.ch_pricing_part');
if (pricingPart.length) {
    var e = document.getElementById("ch_filt_monthly"),
        d = document.getElementById("ch_filt_yearly"),
        t = document.getElementById("ch_switcher"),
        m = document.getElementById("ch_monthly"),
        y = document.getElementById("ch_yearly");

    e.addEventListener("click", function () {
        t.checked = false;
        e.classList.add("toggler--is-active");
        d.classList.remove("toggler--is-active");
        m.classList.remove("ch_hide");
        y.classList.add("ch_hide");
    });

    d.addEventListener("click", function () {
        t.checked = true;
        d.classList.add("toggler--is-active");
        e.classList.remove("toggler--is-active");
        m.classList.add("ch_hide");
        y.classList.remove("ch_hide");
    });

    t.addEventListener("click", function () {
        d.classList.toggle("toggler--is-active");
        e.classList.toggle("toggler--is-active");
        m.classList.toggle("ch_hide");
        y.classList.toggle("ch_hide");
    })
}
