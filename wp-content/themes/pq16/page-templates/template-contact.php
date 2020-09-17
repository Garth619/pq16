<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>
	
	<div id="internal_main">

		<div id='page_wrapper' class="contact_page_wrapper one_col">

			<h1 class='internal_title contact_title center_title'><?php the_title();?></h1><!-- page_title -->

			<?php if ( have_rows( 'contact_subtitles' ) ) : ?>

				<div class='inner_subtitle under_title'>

					<ul>
				
						<?php while ( have_rows( 'contact_subtitles' ) ) : the_row(); ?>

							<li><?php the_sub_field( 'subtitle' ); ?></li>
					
						<?php endwhile; ?>

					</ul>
	
				</div><!-- inner_subtitle -->

			<?php endif; ?>

			<div id='contact_wrapper'>
			
				<span class="contact_address"><?php the_field( 'address','option'); ?></span> 
			
				<a class='contact_phone' href="tel:+1<?php echo str_replace(['-', '(', ')', ' '], '', get_field('footer_phone', 'option')); ?>"><span>P</span> <?php the_field( 'footer_phone','option'); ?></a><!-- contact_phone -->		
				<span class='contact_phone'><span>F</span> <?php the_field( 'footer_fax','option'); ?></span><!-- contact_phone -->

				<a class='button_two contact_directions' href="<?php the_field( 'get_directions_link','option'); ?>" target="_blank" rel="noopener">Directions</a><!-- button_three -->
			
			</div><!-- contact_wrapper -->

		</div><!-- page_wrapper -->

</div><!-- internal_main -->

	<?php get_footer(); ?>