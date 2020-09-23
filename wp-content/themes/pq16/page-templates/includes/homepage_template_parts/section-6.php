<section id='section_six'>

	<div id='sec_six_inner'>
	
		<span id='sec_six_title'><?php the_field( 'section_six_title' ); ?></span><!-- sec_six_title -->

		<div id='sec_six_slider'>

		<?php if ( have_rows( 'section_six_testimonials' ) ) : ?>
			
			<?php while ( have_rows( 'section_six_testimonials' ) ) : the_row(); ?>
		
				<div class='sec_six_slide'>

					<div class='sec_six_slide_inner'>

						<img class='stars lazyload' data-src='<?php bloginfo('template_directory');?>/images/ico-stars.svg' alt=''/>

						<img class='sec_six_sm lazyload' data-src='<?php bloginfo('template_directory');?>/images/ico-fb.svg' alt=''/>

						<div class='sec_six_intro'>
	
							<?php the_sub_field( 'intro' ); ?>
	
						</div><!-- sec_six_intro -->

						<div class='sec_six_descrip'>
	
							<?php the_sub_field( 'description' ); ?>
	
						</div><!-- sec_six_descrip -->

						<span class='sec_six_name'><?php the_sub_field( 'client_name' ); ?></span><!-- sec_six_name -->

					</div><!-- sec_six_slide_inner -->

				</div><!-- sec_six_slide -->
			
			<?php endwhile; ?>

		<?php endif; ?>
		
		</div><!-- sec_six_slider -->
	
	</div><!-- sec_six_inner -->

	<div id='sec_six_image'>

			<?php $section_six_background = get_field( 'section_six_background' ); ?>
			
			<?php if ( $section_six_background ) { ?>
			
				<img id='sec_six_bg' class="lazyload" data-src="<?php echo $section_six_background['url']; ?>" alt="<?php echo $section_six_background['alt']; ?>" />

			<?php } ?>
		
		</div><!-- sec_six_image -->

</section><!-- section_six -->