/**
 * @file
 * Defines Javascript behaviors for the Motollantas Theme.
 */

(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.VillaDigitalTheme = {
    attach: function (context) {
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