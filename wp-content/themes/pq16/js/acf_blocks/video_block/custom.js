(function ($) {
  var initializeVideoblockadmin = function () {
    /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

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
    // $(".page_video_block a").click(function (e) {
    //   e.preventDefault();
    // });
  };

  // Initialize dynamic block preview (editor).
  if (window.acf) {
    window.acf.addAction("render_block_preview", initializeVideoblockadmin);
  }
})(jQuery);
