!function(i){i(document).ready((function(){!function(){function e(){var e=i(".client_reviews_block_slider .slick-track").height();i(window).width()<768&&i(".client_reviews_block_slide").css("height","auto"),i(window).width()>=768&&i(window).width()<1170&&i(".client_reviews_block_slide").css("height",e+"px"),i(window).width()>=1170&&i(window).width()<1490&&i(".client_reviews_block_slide").css("height","auto"),i(window).width()>=1490&&i(".client_reviews_block_slide").css("height",e+"px")}i(".client_reviews_block_slider").each((function(){var e=i(this);e.not(".slick-initialized").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,mobileFirst:!0,adaptiveHeight:!0,fade:!0,arrows:!1,dots:!0,responsive:[{breakpoint:767,settings:{fade:!1,adaptiveHeight:!1,slidesToShow:2,slidesToScroll:2}},{breakpoint:1170,settings:{fade:!1,dots:!1,arrows:!0,adaptiveHeight:!0,slidesToShow:1,slidesToScroll:1,prevArrow:e.prev(".client_reviews_block_arrow_left"),nextArrow:e.next(".client_reviews_block_arrow_right")}},{breakpoint:1490,settings:{fade:!1,dots:!1,arrows:!0,adaptiveHeight:!1,slidesToShow:2,slidesToScroll:2,prevArrow:e.prev(".client_reviews_block_arrow_left"),nextArrow:e.next(".client_reviews_block_arrow_right")}}]})})),e(),i(window).resize(_.debounce((function(){e()}),100))}()})),window.acf&&window.acf.addAction("render_block_preview",(function(){i(".client_reviews_block_slider").each((function(){var e=i(this);e.not(".slick-initialized").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,adaptiveHeight:!0,mobileFirst:!0,fade:!0,arrows:!0,dots:!1,prevArrow:e.prev(".client_reviews_block_arrow_left"),nextArrow:e.next(".client_reviews_block_arrow_right")})}))}))}(jQuery);