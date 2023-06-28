"use strict";

/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
  /*
  *
  *	Equal Heights Divs
  *
  ------------------------------------*/
  $('.js-blocks').matchHeight();

  /*
  *
  *	Parallax Image
  *
  ------------------------------------*/
  $('.img-parallax').each(function () {
    var img = $(this);
    var imgParent = $(this).parent();
    function parallaxImg() {
      var speed = img.data('speed');
      var imgY = imgParent.offset().top;
      var winY = $(this).scrollTop();
      var winH = $(this).height();
      var parentH = imgParent.innerHeight();

      // The next pixel to show on screen      
      var winBottom = winY + winH;

      // If block is shown on screen
      if (winBottom > imgY && winY < imgY + parentH) {
        // Number of pixels shown after block appear
        var imgBottom = (winBottom - imgY) * speed;
        // Max number of pixels until block disappear
        var imgTop = winH + parentH;
        // Porcentage between start showing until disappearing
        // var imgPercent = ((imgBottom / imgTop) * 100) + (50 - (speed * 50));
        var imgPercent = imgBottom / imgTop * 40 + (50 - speed * 50);
      }
      img.css({
        top: imgPercent + 'px',
        // transform: 'translate(-50%, -' + imgPercent + '%)'
        transform: 'translate(0%, -' + imgPercent + 'px)'
      });
    }
    $(document).on({
      scroll: function scroll() {
        parallaxImg();
      },
      ready: function ready() {
        parallaxImg();
      }
    });
  });
}); // END #####################################    END