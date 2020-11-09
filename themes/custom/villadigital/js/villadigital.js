/**
 * @file
 * Defines Javascript behaviors for the Motollantas Theme.
 */

(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.VillaDigitalTheme = {
    attach: function (context) {
      $("a[href*='#']", context).once('link-animator').each(function () {
        $(this).click(function(event) {
          if (this.hash !== ""  &&  $(this.hash).length) {
            event.preventDefault();
            var hash = this.hash;
            var offset = 0;
            console.log(offset);
            $('html, body').animate({
              scrollTop: $(hash).offset().top - offset
            }, 800, function(){
      //              window.location.hash = hash;
            });
          }

        });
      });



      $(".field--name-field-highlights", context).once('slider-highlights').each(function () {
        $(this).slick({
          dots: true,
          arrows: false,
          infinite: true,
          autoplay: true,
          slidesToShow: 1,
          slidesToScroll: 1
        });
      });

      $(".slick-brands .views-rows-wrapper", context).once('slider-brands').each(function () {
        $(this).slick({
          dots: false,
          arrows: false,
          infinite: true,
          autoplay: true,
          slidesToShow: 6,
          slidesToScroll: 6,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3
              }
            }
          ]
        });
      });

      $(".slick-clients .view-content", context).once('slider-clients').each(function () {
        $(this).slick({
          dots: false,
          arrows: false,
          infinite: true,
          autoplay: true,
          slidesToShow: 5,
          slidesToScroll: 5,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3
              }
            }
          ]
        });
      });
    }
  };

})(jQuery, Drupal);
