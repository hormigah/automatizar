/**
 * @file
 * Defines Javascript behaviors for the Motollantas Theme.
 */

(function ($, Drupal) {
  'use strict';

  Drupal.behaviors.VillaDigitalTheme = {
    attach: function (context) {
      $(".slick-brands .views-rows-wrapper", context).once('slider-4items').each(function () {
        $(this).slick({
          dots: true,
          arrows: false,
          infinite: true,
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
    }
  };
  
})(jQuery, Drupal);