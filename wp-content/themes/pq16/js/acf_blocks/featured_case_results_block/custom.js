(function ($) {
  // https://github.com/kenwheeler/slick/issues/694#issuecomment-264191934
  var initializeCRBlock = function () {
    $(".featured_case_results_block_slider").each(function () {
      var slickIndividual = $(this);
      slickIndividual.not(".slick-initialized").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        adaptiveHeight: true,
        fade: true,
        arrows: false,
        dots: true,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              fade: false,
              adaptiveHeight: false,
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 1170,
            settings: {
              fade: false,
              dots: false,
              arrows: true,
              adaptiveHeight: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              prevArrow: slickIndividual.prev(
                ".featured_case_results_block_arrow_left"
              ),
              nextArrow: slickIndividual.next(
                ".featured_case_results_block_arrow_right"
              ),
            },
          },
          {
            breakpoint: 1380,
            settings: {
              fade: false,
              dots: false,
              arrows: true,
              adaptiveHeight: false,
              slidesToShow: 2,
              slidesToScroll: 2,
              prevArrow: slickIndividual.prev(
                ".featured_case_results_block_arrow_left"
              ),
              nextArrow: slickIndividual.next(
                ".featured_case_results_block_arrow_right"
              ),
            },
          },
        ],
      });
    });
  };

  var initializeCRBlockadmin = function () {
    $(".featured_case_results_block_slider").each(function () {
      var slickIndividual = $(this);
      slickIndividual.not(".slick-initialized").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,
        fade: true,
        arrows: true,
        dots: false,
        prevArrow: slickIndividual.prev(
          ".featured_case_results_block_arrow_left"
        ),
        nextArrow: slickIndividual.next(
          ".featured_case_results_block_arrow_right"
        ),
      });
    });
  };

  // Initialize each block on page load (front end).
  $(document).ready(function () {
    initializeCRBlock();
  });

  // Initialize dynamic block preview (editor).
  if (window.acf) {
    window.acf.addAction("render_block_preview", initializeCRBlockadmin);
  }
})(jQuery);
