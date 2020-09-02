<?php 

/* Template Name: Case Results */

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/page_banner/template','page_banner'); ?>
	
	<div id='page_wrapper' class="one_col">
	
		<div id='case_results_wrapper'>

		<?php if ( have_rows( 'case_results_page' ) ) : ?>
			<?php while ( have_rows( 'case_results_page' ) ) : the_row(); ?>

				<div class='single_case_result'>
				
					<span class='single_case_result_amount'><?php the_sub_field( 'amount' ); ?></span><!-- single_case_result_amount -->

					<span class='single_case_result_type'><?php the_sub_field( 'type' ); ?></span><!-- single_case_result_type -->

					<div class='single_case_results_description'>
					
						<?php the_sub_field( 'description' ); ?>
					
					</div><!-- single_case_results_description -->
			
			</div><!-- single_case_result -->
	
			<?php endwhile; ?>
		<?php endif; ?>
		
		</div><!-- case_results_wrapper -->
	
	</div><!-- page_wrapper -->
	
</div><!-- internal_main -->
						
<?php get_footer(); ?>

