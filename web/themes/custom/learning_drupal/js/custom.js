/**
 * @file
 * Global utilities.
 *
 */
(function($, Drupal) {

  'use strict';

  Drupal.behaviors.learning_drupal = {
    attach: function(context, settings) {

      // Custom code here
      $(document).ready(function(){
        // $('.field--name-field-post-2').slick({
        //   infinite: true,
        //   slidesToShow: 3,
        //   slidesToScroll: 3,
        //   autoplay: true,
        //   dots: true,
        //   centerMode: true,
        //   arrows: true,
        var style = document.createElement('style');
        style.type = 'text/css';
        
        // Add CSS rules for the previous arrow icon
        style.innerHTML = '.slick-prev:before { content: "←"; }';
    
        // Append the style element to the document head
        document.head.appendChild(style);
        
        // Initialize the Slick slider
        $('.field--name-field-post-2').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          dots: true,
          centerMode: true,
          arrows: true,
          prevArrow: '<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>',
          nextArrow: '<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button>'
      });
      });
    }
  };

})(jQuery, Drupal);