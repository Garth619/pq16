<footer id="consultation">

<div id='form_wrapper'>

  <div id='form_inner'>

    <div id='form_top'>

      <img id='footer_icon' src='<?php bloginfo('template_directory');?>/images/ico-sp-3.svg' />

      <picture>

        <source media='(min-width: 1695px)' data-srcset='<?php bloginfo('template_directory'); ?>/images/img-ft-desktop.jpg'>

        <source media='(min-width: 1380px)' data-srcset='<?php bloginfo('template_directory'); ?>/images/img-ft-large-laptop.jpg'>
      
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

  <div id='location_wrapper'>
  
    <div class='location_col'>
    
      <a id='footer_logo' href='<?php bloginfo('url');?>'>
      
        <img class="lazyload" data-src='<?php bloginfo('template_directory');?>/images/logo.svg' alt=''/>
      
      </a><!-- footer_logo -->
    
    </div><!-- location_col -->

    <div class='location_col'>

      <div id='location_info'>
      
        <span id='address'>901 Rio Grande Blvd NW,<br/> Suite D-224<br/> Albuquerque, New Mexico 87104</span><!-- address -->

        <a class='footer_phone' href="tel:+15053733333"><span>P</span> (505) 373-3333</a><!-- footer_phone -->

        <span class='footer_phone' ><span>F</span> (505) 340-3533</span><!-- footer_phone -->

        <a class='get_directions' href="" target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->
      
      </div><!-- location_info -->

      <div id='location_sm'>
      
        <div id='social_media'>
        
          <a href="" target="_blank" rel="noopener">

            <?php echo file_get_contents( get_template_directory() . '/images/ft-fb.svg' ); ?>
          
          </a>

          <a href="" target="_blank" rel="noopener">
          
            <?php echo file_get_contents( get_template_directory() . '/images/ft-google.svg' ); ?>
          
          </a>

          <a href="" target="_blank" rel="noopener">
          
            <?php echo file_get_contents( get_template_directory() . '/images/ft-youtube.svg' ); ?>
          
          </a>

          <a href="" target="_blank" rel="noopener">
          
            <?php echo file_get_contents( get_template_directory() . '/images/ft-linkedin.svg' ); ?>
          
          </a>
        
        </div><!-- social_media -->
      
      </div><!-- location_sm -->

    </div><!-- location_col -->
  
  </div><!-- location_wrapper -->

  <div id='copyright'>
  
    <div id='copyright_inner'>
    
      <ul>
        <li>&copy; Ring Jimenez, P.C. All rights reserved.</li>
        <li><a href="">Privacy Policy</a></li>
        <li><a href="">Disclaimery</a></li>
      </ul>

      <a id='ilawyer' href="//ilawyermarketing.com" target="_blank" rel="noopener">
      
        <img src='<?php bloginfo('template_directory');?>/images/ft-ilawyer.svg' alt=''/>
      
      </a><!-- ilawyer -->
    
    </div><!-- copyright_inner -->
  
  </div><!-- copyright -->

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



