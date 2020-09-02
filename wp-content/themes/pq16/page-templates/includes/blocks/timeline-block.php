<?php
/**
 * Block Name: iLawyer Timeline
 *
 * This is the template that displays the ilawyer timeline block.
 */

?>


<div class='timeline_block'>

						<span class='timeline_block_line'></span><!-- timeline_block_line -->

						<div class='timeline_block_date_row_inner'>

            <?php if ( have_rows( 'timeline' ) ) : ?>
	            
              <?php while ( have_rows( 'timeline' ) ) : the_row(); ?>
		
	              <div class='timeline_block_date_row'>
  						
  							  <span class='timeline_block_date_title'><?php the_sub_field( 'timeline_date' ); ?></span><!-- timeline_block_date_title -->
  
  							  <div class='timeline_block_date_content'>
  							
                    <?php the_sub_field( 'timeline_content' ); ?>
  							
  							  </div><!-- timeline_block_date_content -->
  						
  						  </div><!-- timeline_block_date_row -->
              
              <?php endwhile; ?>
              
              <?php else : ?>

                <div class='timeline_block_date_row'>
  						
                  <span class='timeline_block_date_title'>ApRIL 2014</span><!-- timeline_block_date_title -->

                  <div class='timeline_block_date_content'>
              
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<p>
              
                  </div><!-- timeline_block_date_content -->
            
               </div><!-- timeline_block_date_row -->

              <div class='timeline_block_date_row'>
              
                <span class='timeline_block_date_title'>March 2018</span><!-- timeline_block_date_title -->

                <div class='timeline_block_date_content'>
                
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<p>
                
                </div><!-- timeline_block_date_content -->
              
              </div><!-- timeline_block_date_row -->

              <div class='timeline_block_date_row'>
              
                <span class='timeline_block_date_title'>August 2020</span><!-- timeline_block_date_title -->

                <div class='timeline_block_date_content'>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<p>
                
                </div><!-- timeline_block_date_content -->
              
              </div><!-- timeline_block_date_row -->

            <?php endif; ?>
						
			  </div><!-- timeline_block_date_row_inner -->
					
			</div><!-- timeline_block -->