<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>
	
	<div id="internal_main">

		<?php get_template_part('page-templates/includes/page_banner/template','page_banner'); ?>

			<div id='page_wrapper' class="contact_page_wrapper one_col">

				<div id='contact_col_wrapper'>
				
					<div class='contact_col'>
				
						<span class='contact_title'><?php the_field( 'contact_title' ); ?></span><!-- contact_title -->

						<span class='contact_address contact_content'><?php the_field( 'contact_address' ); ?></span><!-- contact_address -->

						<a href="<?php the_field( 'contact_button_link' ); ?>" class="get_directions" target="_blank" rel="noopener"><?php the_field( 'contact_button_verbiage' ); ?></a>
				
					</div><!-- contact_col -->

					<div class='contact_col'>
				
						<span class='contact_title'><?php the_field( 'contact_title_two' ); ?></span><!-- contact_title -->

						<span class='contact_subtitle'><?php the_field( 'contact_subtitle' ); ?></span><!-- contact_title -->

						<a href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('contact_phone')); ?>" class='contact_address contact_content'><?php the_field( 'contact_phone' ); ?></a><!-- contact_address -->
				
					</div><!-- contact_col -->

					</div><!-- contact_col_wrapper -->

				<?php get_template_part('page-templates/includes/main_form/template','main_form');?>

			</div><!-- page_wrapper -->

		</div><!-- internal_main -->

	<?php get_footer(); ?>