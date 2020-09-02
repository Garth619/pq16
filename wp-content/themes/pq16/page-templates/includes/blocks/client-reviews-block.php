<?php
/**
 * Block Name: iLawyer Client Reviews
 *
 * This is the template that displays the ilawyer client reviews block.
 */

 $client_reviews_title = get_field('client_reviews_title') ?: 'Client Reviews';

 ?>


    <div class='client_reviews_block'>
					
          <span class='client_reviews_block_title'><?php echo $client_reviews_title;?></span><!-- client_reviews_block_title -->

          <div class='client_reviews_block_slider_wrapper'>
  
            <div class='client_reviews_block_arrow_left client_reviews_block_arrow'></div><!-- client_reviews_block_arrow -->

              <div class='client_reviews_block_slider'>

              <?php if ( have_rows( 'client_reviews' ) ) : ?>
	              <?php while ( have_rows( 'client_reviews' ) ) : the_row(); ?>

                <div class='client_reviews_block_slide'>

                  <?php if(get_field('client_reviews_page_link')) : ?>

                    <a href='<?php the_field('client_reviews_page_link');?>'>

                    <?php else:?>

                        <a>

                  <?php endif;?>

                  <div class='client_reviews_block_slide_top'>
    
                    <img src='<?php bloginfo('template_directory');?>/images/stars.svg' alt=''/><!-- name -->

                    <span class='client_reviews_block_slide_descrip'><?php the_sub_field( 'description' ); ?></span><!-- client_reviews_block_slide_descrip -->

                    <span class='client_reviews_block_slide_name'><?php the_sub_field( 'name' ); ?></span><!-- client_reviews_block_slide_name -->

                  </div><!-- client_reviews_block_slide_top -->

                  <div class='client_reviews_block_slide_bottom'>
                  
                    <div class='client_reviews_block_slide_col'>
                    
                      <span class='client_reviews_block_slide_amount'><?php the_sub_field( 'before_amount' ); ?></span><!-- client_reviews_block_slide_amount -->
              
                      <span class='client_reviews_block_slide_subtitle'><?php the_sub_field( 'before_type' ); ?></span><!-- client_reviews_block_slide_subtitle -->
                    
                    </div><!-- client_reviews_block_slide_col -->
              
                    <div class='client_reviews_block_slide_col'>
                    
                    <span class='client_reviews_block_slide_turned'><?php the_sub_field( 'turned_into' ); ?></span><!-- client_reviews_block_slide_turned -->
                    
                    </div><!-- client_reviews_block_slide_col -->
              
                    <div class='client_reviews_block_slide_col'>
                    
                     <span class='client_reviews_block_slide_amount'><?php the_sub_field( 'after_amount' ); ?></span><!-- client_reviews_block_slide_amount -->
              
                     <span class='client_reviews_block_slide_subtitle'><?php the_sub_field( 'after_type' ); ?></span><!-- client_reviews_block_slide_subtitle -->
                    
                    </div><!-- client_reviews_block_slide_col -->
                  
                  </div><!-- client_reviews_block_slide_bottom -->
              
                </a>
              
              </div><!-- client_reviews_block_slide -->
		
	              <?php endwhile; ?>
                
                <?php else : ?>

                  <div class='client_reviews_block_slide'>

                    <a>

                    <div class='client_reviews_block_slide_top'>
    
                      <img src='<?php bloginfo('template_directory');?>/images/stars.svg' alt=''/><!-- name -->

                      <span class='client_reviews_block_slide_descrip'>“It’s rare to find an attorney with a humanitarian side, but that’s exactly what I found in Mike and his team.”</span><!-- client_reviews_block_slide_descrip -->

                      <span class='client_reviews_block_slide_name'>Kerry</span><!-- client_reviews_block_slide_name -->

                    </div><!-- client_reviews_block_slide_top -->

                    <div class='client_reviews_block_slide_bottom'>
                    
                      <div class='client_reviews_block_slide_col'>
                      
                        <span class='client_reviews_block_slide_amount'>$2,500</span><!-- client_reviews_block_slide_amount -->

                        <span class='client_reviews_block_slide_subtitle'>Insurance offer</span><!-- client_reviews_block_slide_subtitle -->
                      
                      </div><!-- client_reviews_block_slide_col -->

                      <div class='client_reviews_block_slide_col'>
                      
                      <span class='client_reviews_block_slide_turned'>Turned<br/> Into</span><!-- client_reviews_block_slide_turned -->
                      
                      </div><!-- client_reviews_block_slide_col -->

                      <div class='client_reviews_block_slide_col'>
                      
                      <span class='client_reviews_block_slide_amount'>$2,500</span><!-- client_reviews_block_slide_amount -->

                      <span class='client_reviews_block_slide_subtitle'>What we got</span><!-- client_reviews_block_slide_subtitle -->
                      
                      </div><!-- client_reviews_block_slide_col -->
                    
                    </div><!-- client_reviews_block_slide_bottom -->

                  </a>

                </div><!-- client_reviews_block_slide -->

                <div class='client_reviews_block_slide'>

                  <a>

                    <div class='client_reviews_block_slide_top'>
                    
                      <img src='<?php bloginfo('template_directory');?>/images/stars.svg' alt=''/><!-- name -->

                      <span class='client_reviews_block_slide_descrip'>“They have done an excellent job with my representation and I couldn’t be happier with the amount of care and compassion in how they handled my case.”</span><!-- client_reviews_block_slide_descrip -->

                      <span class='client_reviews_block_slide_name'>Tom</span><!-- client_reviews_block_slide_name -->

                    </div><!-- client_reviews_block_slide_top -->

                    <div class='client_reviews_block_slide_bottom'>
                    
                      <div class='client_reviews_block_slide_col'>
                      
                        <span class='client_reviews_block_slide_amount'>$2,500</span><!-- client_reviews_block_slide_amount -->

                        <span class='client_reviews_block_slide_subtitle'>Insurance offer</span><!-- client_reviews_block_slide_subtitle -->
                      
                      </div><!-- client_reviews_block_slide_col -->

                      <div class='client_reviews_block_slide_col'>
                      
                      <span class='client_reviews_block_slide_turned'>Turned<br/> Into</span><!-- client_reviews_block_slide_turned -->
                      
                      </div><!-- client_reviews_block_slide_col -->

                      <div class='client_reviews_block_slide_col'>
                      
                      <span class='client_reviews_block_slide_amount'>$2,500</span><!-- client_reviews_block_slide_amount -->

                      <span class='client_reviews_block_slide_subtitle'>What we got</span><!-- client_reviews_block_slide_subtitle -->
                      
                      </div><!-- client_reviews_block_slide_col -->
                    
                    </div><!-- client_reviews_block_slide_bottom -->

                  </a>

                </div><!-- client_reviews_block_slide -->
  
            <?php endif; ?>
              
          </div><!-- client_reviews_block_slider -->

        <div class='client_reviews_block_arrow_right client_reviews_block_arrow'></div><!-- client_reviews_block_arrow -->
  
      </div><!-- client_reviews_block_slider_wrapper -->
        
    </div><!-- client_reviews_block -->