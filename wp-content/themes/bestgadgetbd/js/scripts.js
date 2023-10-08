// (function ($, window, document, pluginObject) {
//     // "use strict";
//     // $().ready(function () {
//     //     $('.slick-carousel').slick({
//     //         arrows: true,
//     //         centerPadding: "0px",
//     //         dots: true,
//     //         slidesToShow: 1,
//     //         infinite: false
//     //     });
//     // });
//     alert('ok');
//
// });
const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage() {
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${-(imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);

jQuery(document).ready(function () {
    jQuery('.ct-box-slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
    });
    jQuery('#ct-js-box-slider--prev').on('click', function () {
        jQuery('.ct-js-box-slider').slick('slickPrev');
    });
    jQuery('#ct-js-box-slider--next').on('click', function () {
        jQuery('.ct-js-box-slider').slick('slickNext');
    });
});

