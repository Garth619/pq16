<?php
/**
 * Block Name: iLawyer Case Results
 *
 * This is the template that displays the ilawyer case results block.
 */

$cr_title = get_field('featured_case_results_title') ?: 'Featured Case Results';


?>
	
	<div class='featured_case_results_block'>

	  <span class='featured_case_results_block_title'><?php echo $cr_title; ?></span><!-- featured_case_results_block_title -->

	  <div class='featured_case_results_block_slider_wrapper'>
		
		  <div class='featured_case_results_block_arrow_left featured_case_results_block_arrow'></div><!-- featured_case_results_block_arrow -->

		  <div class='featured_case_results_block_slider'>

			<?php if ( have_rows( 'featured_case_results_two' ) ) : ?>

	    <?php while ( have_rows( 'featured_case_results_two' ) ) : the_row(); ?>
		
		  <div class='featured_case_results_block_slide'>

				<a href='<?php the_field( 'featured_case_results_links' ); ?>'>
				
 					<span class='featured_case_results_block_slide_title'><?php the_sub_field( 'amount' ); ?></span><!-- featured_case_results_block_slide_title -->
				
 					<span class='featured_case_results_block_slide_descrip'><?php the_sub_field( 'description' ); ?></span><!-- featured_case_results_block_slide_descrip -->

				</a>
								
	 		</div><!-- featured_case_results_block_slide -->
		
			<?php endwhile; ?>

			<?php else: // starer content for the block and the block preview ?>

				<div class='featured_case_results_block_slide'>

  				<a href=''>
  				
   					<span class='featured_case_results_block_slide_title'>Amount</span><!-- featured_case_results_block_slide_title -->
  				
   					<span class='featured_case_results_block_slide_descrip'>This is a description</span><!-- featured_case_results_block_slide_descrip -->
  
  				</a>
								
	 		</div><!-- featured_case_results_block_slide -->

			 <div class='featured_case_results_block_slide'>

  				<a href=''>
  				
   					<span class='featured_case_results_block_slide_title'>Amount</span><!-- featured_case_results_block_slide_title -->
  				
   					<span class='featured_case_results_block_slide_descrip'>This is a description</span><!-- featured_case_results_block_slide_descrip -->
  
  				</a>
								
	 		</div><!-- featured_case_results_block_slide -->

			 <div class='featured_case_results_block_slide'>

  				<a>
  				
   					<span class='featured_case_results_block_slide_title'>Amount</span><!-- featured_case_results_block_slide_title -->
  				
   					<span class='featured_case_results_block_slide_descrip'>This is a description</span><!-- featured_case_results_block_slide_descrip -->
  
  				</a>
								
	 		</div><!-- featured_case_results_block_slide -->

			 <div class='featured_case_results_block_slide'>

  				<a>
  				
   					<span class='featured_case_results_block_slide_title'>Amount</span><!-- featured_case_results_block_slide_title -->
  				
   					<span class='featured_case_results_block_slide_descrip'>This is a description</span><!-- featured_case_results_block_slide_descrip -->
  
  				</a>
								
	 		</div><!-- featured_case_results_block_slide -->

			 <div class='featured_case_results_block_slide'>

  				<a>
  				
   					<span class='featured_case_results_block_slide_title'>Amount</span><!-- featured_case_results_block_slide_title -->
  				
   					<span class='featured_case_results_block_slide_descrip'>This is a description</span><!-- featured_case_results_block_slide_descrip -->
  
  				</a>
								
	 		</div><!-- featured_case_results_block_slide -->

			<?php endif; ?>

		</div><!-- featured_case_results_block_slider -->

   <div class='featured_case_results_block_arrow_right featured_case_results_block_arrow'></div><!-- featured_case_results_block_arrow -->
		
 </div><!-- featured_case_results_block_slider_wrapper -->
					
</div><!-- featured_case_results_block -->



