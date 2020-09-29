<section id='section_two'>

	<div id='sec_two_inner' class="preload_section">
  
    <div id='sec_two_slider' class="preload_slider">

    <?php if ( have_rows( 'section_two_selling_points' ) ) : ?>
	      
        <?php while ( have_rows( 'section_two_selling_points' ) ) : the_row(); ?>
  
          <div class='sec_two_slide'>

            <div class='sec_two_slide_inner'>

              <div class='sec_two_img'>
  
                <?php $icon = get_sub_field( 'icon' ); ?>
		
                <?php if ( $icon ) { ?>
			
                  <img class="lazyload" data-src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
		
                <?php } ?>
  
              </div><!-- sec_two_img -->

              <div class='sec_two_content'>
  
                <span class='sec_two_slide_title'><?php the_sub_field( 'title' ); ?></span><!-- sec_two_slide_title -->

                <span class='sec_two_descrip'><?php the_sub_field( 'description' ); ?></span><!-- sec_two_descrip -->
  
              </div><!-- sec_two_content -->

            </div><!-- sec_two_slide_inner -->

          </div><!-- sec_two_slide -->
        
        <?php endwhile; ?>

      <?php endif; ?>
    
    </div><!-- sec_two_slider -->
  
  </div><!-- sec_two_inner -->

</section><!-- section_two -->