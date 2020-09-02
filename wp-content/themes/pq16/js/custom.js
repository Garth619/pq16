// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'macy.js'
// @codekit-prepend 'underscore.js'
// @codekit-prepend 'lazysizes.js'

jQuery(document).ready(function ($) {
  $("body").addClass("ready");

  /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */
  $("body").addClass("ready");
  // loads wistia on click to improve initial page speed
  $(".wistia_embed").click(function () {
    //make sure to only load if Wistia is not already loaded
    let self = this;
    if (typeof Wistia === "undefined") {
      jQuery.getScript(
        "https://fast.wistia.com/assets/external/E-v1.js",
        function (data, textStatus, jqxhr) {
          // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
          // a hook we can listen for. So we need to set an interval to check when it's ready
          var interval = setInterval(function () {
            if ($(self).attr("id") && window._wq) {
              _wq.push({
                id: "_all",
                onReady: function (video) {
                  video.play();
                },
              });
              clearInterval(interval);
            }
          }, 100);
        }
      );
    } else {
      console.log("wistia is already defined");
    }
  });

  /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
  --------------------------------------------------------------------------------------- */

  $(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
          $("html, body").animate(
            {
              scrollTop: target.offset().top,
            },
            1000
          );
          return false;
        }
      }
    });
  });

  if ($("#internal_banner")[0]) {
    $("#page_wrapper").addClass("banner");
  } else {
    $("#page_wrapper").addClass("no_banner");
  }

  /* Waypoints
     --------------------------------------------------------------------------------------- */

  function createWaypoint(
    triggerElementId,
    animatedElement,
    className,
    offsetVal,
    functionName,
    reverse
  ) {
    if (jQuery("#" + triggerElementId).length) {
      var waypoint = new Waypoint({
        element: document.getElementById(triggerElementId),
        handler: function (direction) {
          if (direction === "down") {
            jQuery(animatedElement).addClass(className);

            if (typeof functionName === "function") {
              functionName();
              this.destroy();
            }
          } else if (direction === "up") {
            if (reverse) {
              jQuery(animatedElement).removeClass(className);
            }
          }
        },
        offset: offsetVal,
        // Integer or percent
        // 500 means when element is 500px from the top of the page, the event triggers
        // 50% means when element is 50% from the top of the page, the event triggers
      });
    }
  }

  createWaypoint(
    "header",
    "body#header_trigger",
    "header_fixed",
    -70,
    null,
    true
  );

  createWaypoint("section_three", "#section_three", "visible", 400, null, true);
  createWaypoint("section_four", "#section_four", "visible", 400, null, true);
  createWaypoint("section_seven", "#section_seven", "visible", 400, null, true);

  /* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */

  $(".preload_slider").on("init", function (event, slick) {
    $(".preload_section").addClass("load_after");
  });

  $("#sec_one_slider").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 2,
    mobileFirst: true,
    arrows: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
    ],
  });

  $("#sec_two_left_slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: false,
    adaptiveHeight: true,
    fade: true,
    dots: false,
    responsive: [
      {
        breakpoint: 1180,
        settings: {
          arrows: true,
          prevArrow: ".sec_two_arrow_left",
          nextArrow: ".sec_two_arrow_right",
        },
      },
    ],
  });

  $("#sec_two_featured_slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    adaptiveHeight: true,
    arrows: true,
    dots: false,
    fade: true,
    prevArrow: ".sec_two_featured_arrow_left",
    nextArrow: ".sec_two_featured_arrow_right",
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1180,
        settings: {
          fade: false,
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 1790,
        settings: {
          fade: false,
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
    ],
  });

  $("#sec_four_slider").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    fade: true,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          fade: false,
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
          slidesToShow: 2,
          slidesToScroll: 2,
          prevArrow: ".sec_four_arrow_left",
          nextArrow: ".sec_four_arrow_right",
        },
      },
      {
        breakpoint: 1380,
        settings: {
          fade: false,
          dots: false,
          arrows: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          prevArrow: ".sec_four_arrow_left",
          nextArrow: ".sec_four_arrow_right",
        },
      },
    ],
  });

  $("#sec_six_post_wrapper").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    arrows: false,
    adaptiveHeight: true,
    fade: true,
    dots: true,
    responsive: [
      {
        breakpoint: 1180,
        settings: "unslick",
      },
    ],
  });

  /* Related Content
--------------------------------------------------------------------------------------- */

  // if ($(".related_post_list").length > 0) {
  //   var macyInstance = Macy({
  //     container: ".related_post_list",
  //     columns: 3,
  //     margin: {
  //       x: 60,
  //       y: 40,
  //     },
  //     breakAt: {
  //       1170: {
  //         margin: {
  //           x: 30,
  //           y: 30,
  //         },
  //         columns: 3,
  //       },
  //       1066: {
  //         margin: {
  //           x: 30,
  //           y: 30,
  //         },
  //         columns: 1,
  //       },
  //       767: {
  //         margin: {
  //           x: 0,
  //           y: 30,
  //         },
  //         columns: 1,
  //       },
  //     },
  //   });
  // }

  /* Case Results Columns
--------------------------------------------------------------------------------------- */

  if ($("#case_results_wrapper").length > 0) {
    var macyInstance = Macy({
      container: "#case_results_wrapper",
      columns: 3,
      margin: {
        x: 60,
        y: 40,
      },
      breakAt: {
        1170: {
          margin: {
            x: 30,
            y: 30,
          },
          columns: 3,
        },
        1066: {
          margin: {
            x: 30,
            y: 30,
          },
          columns: 2,
        },
        695: {
          margin: {
            x: 0,
            y: 30,
          },
          columns: 1,
        },
      },
    });
  }

  /* PA Grids - Multpile Macy.js Columns
--------------------------------------------------------------------------------------- */

  var pagrids = document.querySelectorAll(".pa_directory_top_menu div ul.menu");
  var macyInstances = [];
  var macyOptions = {
    columns: 4,
    margin: {
      x: 34,
      y: 0,
    },
    breakAt: {
      1695: {
        margin: {
          x: 35,
          y: 0,
        },
      },
      1275: 2,
      767: {
        margin: {
          x: 0,
          y: 0,
        },
        columns: 1,
      },
    },
  };

  for (var i = 0; i < pagrids.length; i++) {
    var newId = "pagrid-instance-" + i;
    pagrids[i].id = newId;
    macyOptions.container = "#" + newId;
    macyInstances.push(Macy(macyOptions));
  }

  /* Form Select Triangle
--------------------------------------------------------------------------------------- */

  $("li").has("select").addClass("custom_select");

  /* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */

  $("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");

  // not found go back button

  function goBack() {
    window.history.back();
  }

  $("span.go_back").on("click", function (e) {
    goBack();
  });

  /* Disable Sidebar
--------------------------------------------------------------------------------------- */

  if (!$("#sidebar_wrapper").length > 0) {
    $("#page_content").addClass("no_sidebar");
  }

  /* Sidebar Current Class for Blog Sidebars
--------------------------------------------------------------------------------------- */

  // add active to blog widgets that dont show a built in current class

  var pgurl = window.location.href;

  $(".sidebar_box.sidebar_blog ul li").each(function () {
    if ($(this).find("a").attr("href") == pgurl)
      $(this).addClass("blog-active");
  });

  $(".sidebar_box ul.menu > li.menu-item-has-children > a").on(
    "click",
    function (e) {
      $(this).next("ul.sub-menu").slideToggle(300);

      $(this).parent().toggleClass("active");
    }
  );

  /* Resize Nav Functions
--------------------------------------------------------------------------------------- */

  // resize - tablet and desktop top navigatons behave differently. These turn off click functions at certain window widths without reloading the page

  // nav

  //$('nav ul.menu > li.current-menu-ancestor > a').addClass('active');

  $("#menu_wrapper").on("click", function (e) {
    $("#header_right").toggleClass("open");
    $("nav").toggleClass("open");
  });

  function navDesktop() {
    $("header nav").addClass("nav_desktop");

    $("header nav li.menu-item-has-children > a")
      .next("ul.sub-menu")
      .removeClass("open");

    $("header nav").removeClass("nav_tablet");
  }

  function navTablet() {
    $("header nav").removeClass("nav_desktop");

    $("header nav").addClass("nav_tablet");
  }

  function tabletClick() {
    $(this).next("ul.sub-menu").slideToggle(350);

    $(this).parent().toggleClass("active");

    $(this).toggleClass("active");

    $(this).next("ul.sub-menu").toggleClass("active");
  }

  // nav

  if ($(window).width() >= 1170) {
    navDesktop();
  }

  if ($(window).width() < 1170) {
    navTablet();

    $("header nav li.menu-item-has-children > a")
      .off()
      .on("click", tabletClick);
  }

  // resize window width and fire functions

  $(window).resize(
    _.debounce(function () {
      if ($(window).width() >= 1170) {
        navDesktop();

        // off

        $("header nav li.menu-item-has-children > a").off("click", tabletClick);
      }

      if ($(window).width() < 1170) {
        navTablet();

        // off

        $("header nav li.menu-item-has-children > a")
          .off()
          .on("click", tabletClick);
      }
    }, 100)
  );
}); // document ready
