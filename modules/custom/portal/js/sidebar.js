/**
 * @file
 * Defines behaviors for the checkout admin UI.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Attaches the sideBar behavior.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches the sideBar behavior.
   *
   */
  Drupal.behaviors.sideBar = {
    attach: function (context, settings) {
      $(context).find('#sidebar-button').once('sidebar-button').each(function () {
        $(this).on('click', function () {
          $(this).toggleClass('open');
          $('.main-bar-wraper').toggleClass('show');
        });
        
      });
    }
  };

})(jQuery, Drupal);
