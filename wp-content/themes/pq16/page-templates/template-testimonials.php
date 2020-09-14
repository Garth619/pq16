<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/page_banner/template','page_banner'); ?>
	
	<div id='page_wrapper' class='testimonials_page_wrapper one_col'>

		<div class='inner_subtitle'>
		
			<span><?php the_field( 'testimonial_subtitle' ); ?></span>
		
		</div><!-- inner_subtitle -->
	
		<div id='testimonials_wrapper'>

			<?php if ( have_rows( 'testimonial_column_one' ) ) : ?>

				<div class='testimonial_col'>
			
				<?php while ( have_rows( 'testimonial_column_one' ) ) : the_row(); ?>

					<div class='single_testimonial'>
			
						<img class="testi_stars" src='<?php bloginfo('template_directory');?>/images/ico-stars.svg' alt=''/>

						<img class="testi_icon" src='<?php bloginfo('template_directory');?>/images/ico-fb.svg' alt=''/>

						<div class='testi_intro'>
			
							<?php the_sub_field( 'intro' ); ?>
			
						</div><!-- testi_intro -->

						<div class='testi_descrip'>
			
							<?php the_sub_field( 'description' ); ?>
			
						</div><!-- testi_descrip -->

						<span class='testi_name'><?php the_sub_field( 'client_name' ); ?></span><!-- testi_name -->
		
					</div><!-- single_testimonial -->
		
				<?php endwhile; ?>

				</div><!-- testimonial_col -->

			<?php endif; ?>

			<?php if ( have_rows( 'testimonial_column_two' ) ) : ?>

			<div class="testimonial_col">
			
			<?php while ( have_rows( 'testimonial_column_two' ) ) : the_row(); ?>

				<div class='single_testimonial'>
		
					<img class="testi_stars" src='<?php bloginfo('template_directory');?>/images/ico-stars.svg' alt=''/>

					<img class="testi_icon" src='<?php bloginfo('template_directory');?>/images/ico-fb.svg' alt=''/>

					<div class='testi_intro'>
		
						<?php the_sub_field( 'intro' ); ?>
		
					</div><!-- testi_intro -->

					<div class='testi_descrip'>
		
						<?php the_sub_field( 'description' ); ?>
		
					</div><!-- testi_descrip -->

					<span class='testi_name'><?php the_sub_field( 'client_name' ); ?></span><!-- testi_name -->
	
				</div><!-- single_testimonial -->
	
			<?php endwhile; ?>

			</div><!-- testimonial_col -->

		<?php endif; ?>

		</div><!-- testimonials_wrapper -->

	</div><!-- page_wrapper -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>