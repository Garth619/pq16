<footer id="consultation">

<div id='form_wrapper'>

  <div id='form_inner'>

    <div id='form_top'>

      <img id='footer_icon' src='<?php bloginfo('template_directory');?>/images/ico-sp-3.svg' />

      <picture>
      
        <source media='(min-width: 1170px)' data-srcset='<?php bloginfo('template_directory'); ?>/images/img-ft-laptop.jpg'>
      
        <img id='footer_img' class='lazyload' data-src='<?php bloginfo('template_directory');?>/images/img-ft.jpg' alt='' />
      
      </picture>

    </div><!-- form_top -->

    <div id='form_bottom'>

      <span id='footer_form_title'>Free Consultation</span><!-- footer_form_title -->

      <span id='footer_form_descrip'>Meet with us, ask questions, get answers and discuss your options completely free of charge.</span><!-- footer_form_descrip -->

      <?php gravity_form(3, false, false, false, '', true, 1345); ?>

      <span id='footer_required'>all fields required *</span><!-- footer_required -->

    </div><!-- form_bottom -->

  </div><!-- form_inner -->

  </div><!-- form_wrapper -->

</footer>

<?php wp_footer();?>

<?php get_field('footer_scripts','option');?>

<?php if(is_front_page()) { ?>

<script type="text/javascript">

jQuery(document).ready(function ($) {

  // above the fold home functions

  $("body").addClass("ready");
  

});

// load all other scripts

function delayScript(src, timeout, attributes) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      const scriptElem = document.createElement("script");
      scriptElem.src = src;
      for (const key in attributes) {
        const attribute = key;
        const value = attributes[key];
        scriptElem.setAttribute(attribute, value ? value : "");
      }
      scriptElem.addEventListener("readystatechange", () => {
        resolve();
      });
      document.head.appendChild(scriptElem);
    }, timeout);
  });
}

delayScript("<?php bloginfo('template_directory');?>/js/custom-min.js", 2000); 

</script>

<?php } ?>

</body>
</html>



