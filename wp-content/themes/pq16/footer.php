<footer id="consultation">

<div id='form_wrapper'>

  <div id='form_inner'>

    <div id='form_top'>

      <img id='footer_icon' src='<?php bloginfo('template_directory');?>/images/ico-sp-3.svg' alt="footer icon svg"/>

      <picture>

        <?php $footer_monitor_background = get_field( 'footer_monitor_background','option'); ?>
        
        <?php if ( $footer_monitor_background ) { ?>
          
          <source media='(min-width: 1695px)' data-srcset='<?php echo $footer_monitor_background['url']; ?>'>
        
        <?php } ?>

        <?php $footer_large_laptop_background = get_field( 'footer_large_laptop_background','option'); ?>
        
        <?php if ( $footer_large_laptop_background ) { ?>

          <source media='(min-width: 1380px)' data-srcset='<?php echo $footer_large_laptop_background['url']; ?>'>
        
        <?php } ?>

        <?php $footer_small_laptop_background = get_field( 'footer_small_laptop_background','option'); ?>
        
       <img id='footer_img' class="lazyload" data-src="<?php echo $footer_small_laptop_background['url']; ?>" alt="<?php echo $footer_small_laptop_background['alt']; ?>" />
        
    </picture>

    </div><!-- form_top -->

    <div id='form_bottom'>

      <span id='footer_form_title'><?php the_field( 'form_title','option'); ?></span><!-- footer_form_title -->

      <span id='footer_form_descrip'><?php the_field( 'form_subtitle','option'); ?></span><!-- footer_form_descrip -->

      <?php gravity_form(3, false, false, false, '', true, 1345); ?>

      <span id='footer_required'><?php the_field( 'required_field_verbiage','option'); ?></span><!-- footer_required -->

    </div><!-- form_bottom -->

  </div><!-- form_inner -->

  </div><!-- form_wrapper -->

  <div id='location_wrapper'>
  
    <div class='location_col'>
    
      <a id='footer_logo' href='<?php bloginfo('url');?>'>

        <?php $footer_logo = get_field( 'footer_logo','option'); ?>
      
        <img class="lazyload" src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" />

      </a><!-- footer_logo -->
    
    </div><!-- location_col -->

    <div class='location_col'>

      <div id='location_info'>
      
        <span id='address'><?php the_field( 'address','option'); ?></span><!-- address -->

        <a class='footer_phone' href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('footer_phone', 'option')); ?>"><span>P</span> <?php the_field( 'footer_phone','option'); ?></a><!-- footer_phone -->

        <span class='footer_phone' ><span>F</span> <?php the_field( 'footer_fax','option'); ?></span><!-- footer_phone -->

        <a class='get_directions' href="<?php the_field( 'get_directions_link','option'); ?>" target="_blank" rel="noopener"><?php the_field( 'get_directions_verbiage','option'); ?></a><!-- get_directions -->
      
      </div><!-- location_info -->

      <div id='location_sm'>
      
        <div id='social_media'>

        <?php if ( have_rows( 'social_media','option') ) : ?>
	        <?php while ( have_rows( 'social_media','option') ) : the_row(); ?>

            <?php if(get_sub_field('icon') == "Facebook") { ?>

              <a href="<?php the_sub_field( 'link' ); ?>" target="_blank" rel="noopener">
  
                <?php echo file_get_contents( get_template_directory() . '/images/ft-fb.svg' ); ?>

              </a>

            <?php } ?>

            <?php if(get_sub_field('icon') == "Google") { ?>

              <a href="<?php the_sub_field( 'link' ); ?>" target="_blank" rel="noopener">

                <?php echo file_get_contents( get_template_directory() . '/images/ft-google.svg' ); ?>

              </a>

            <?php } ?>

            <?php if(get_sub_field('icon') == "Youtube") { ?>

              <a href="<?php the_sub_field( 'link' ); ?>" target="_blank" rel="noopener">

                <?php echo file_get_contents( get_template_directory() . '/images/ft-youtube.svg' ); ?>

              </a>

            <?php } ?>

            <?php if(get_sub_field('icon') == "LinkedIn") { ?>

              <a href="<?php the_sub_field( 'link' ); ?>" target="_blank" rel="noopener">

                <?php echo file_get_contents( get_template_directory() . '/images/ft-linkedin.svg' ); ?>

              </a>

            <?php } ?>

          <?php endwhile; ?>
        <?php endif; ?>
        
        </div><!-- social_media -->
      
      </div><!-- location_sm -->

    </div><!-- location_col -->
  
  </div><!-- location_wrapper -->

  <div id='copyright'>
  
    <div id='copyright_inner'>
    
      <ul>

        <li>&copy; <?php the_field( 'copyright_law_firm_name','option'); ?></li>
        
        <?php if(get_field('disclaimer','option') && get_field('disclaimer_title','option')) { ?>
          
          <li><a href="<?php the_field( 'disclaimer','option'); ?>"><?php the_field( 'disclaimer_title','option'); ?></a></li>
        
        <?php } ?>
        
        <?php if(get_field('privacy_policy','option') && get_field('privacy_policy_title','option')) { ?>
          
          <li><a href="<?php the_field( 'privacy_policy','option'); ?>"><?php the_field( 'privacy_policy_title','option'); ?></a></li>
        
        <?php } ?>

      </ul>

      <a id='ilawyer' href="//ilawyermarketing.com" target="_blank" rel="noopener">
      
        <img src='<?php bloginfo('template_directory');?>/images/ft-ilawyer.svg' alt='iLawyer Marketing Logo'/>
      
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



