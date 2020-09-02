<section id='section_four'>

	<div id='sec_four_inner'>

		<span id='sec_four_title'><?php the_field( 'section_four_title' ); ?></span><!-- sec_four_title -->

		<div id='sec_four_slider_wrapper'>
		
			<div class='sec_four_arrow_left sec_four_arrow'></div><!-- sec_four_arrow -->

			<div id='sec_four_slider'>

			<?php if ( have_rows( 'section_four_slider' ) ) : ?>
				<?php while ( have_rows( 'section_four_slider' ) ) : the_row(); ?>

				<div class='sec_four_slide <?php the_sub_field( 'class' ); ?>'>

					<a href="<?php the_field( 'section_four_case_results_page_link' ); ?>">

						<?php $svg = get_sub_field( 'svg' ); ?>
		
						<?php if ( $svg ) { ?>
							
							<img src="<?php echo $svg['url']; ?>" alt="<?php echo $svg['alt']; ?>" />
						
						<?php } ?>

						<span class='sec_four_slide_title'><?php the_sub_field( 'amount' ); ?></span><!-- sec_four_slide_title -->

						<span class='sec_four_slide_type'><?php the_sub_field( 'type' ); ?></span><!-- sec_four_slide_type -->

						<span class='sec_four_slide_descrip'><?php the_sub_field( 'description' ); ?></span><!-- sec_four_slide_descrip -->

					</a>

				</div><!-- sec_four_slide -->

				<?php endwhile; ?>
			<?php endif; ?>
			
			</div><!-- sec_four_slider -->

			<div class='sec_four_arrow_right sec_four_arrow'></div><!-- sec_four_arrow -->
		
		</div><!-- sec_four_slider_wrapper -->
	
	</div><!-- sec_four_inner -->

</section><!-- section_four -->