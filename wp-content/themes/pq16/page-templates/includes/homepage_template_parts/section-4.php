<section id='section_four'>

<div id='sec_four_inner'>

	<span id='sec_four_title'><?php the_field( 'section_four_title' ); ?></span><!-- sec_four_title -->

	<div id='sec_four_att_wrapper'>
	
		<div id='sec_four_left'>
		
		<?php $section_four_image = get_field( 'section_four_image' ); ?>
		
		<?php if ( $section_four_image ) { ?>
	
			<img class="lazyload" data-src="<?php echo $section_four_image['url']; ?>" alt="<?php echo $section_four_image['alt']; ?>" />
		
		<?php } ?>
		
		</div><!-- sec_four_left -->

		<div id='sec_four_right'>

			<div id='sec_four_right_content' class="content">
			
				<div id='sec_four_right_content_inner'>

					<img class="lazyload" data-src='<?php bloginfo('template_directory');?>/images/ico-sp-3.svg' alt='Section Four Icon'/>
			
					<?php the_field( 'section_four_intro' ); ?>

					<a class="meet_att_button button" href="<?php the_field( 'section_four_button_link' ); ?>"><?php the_field( 'section_four_button_verbiage' ); ?></a>
			
				</div><!-- sec_four_right_content_inner -->

			</div><!-- sec_four_right_content -->
		
		</div><!-- sec_four_right -->
	
	</div><!-- sec_four_att_wrapper -->

</div><!-- sec_four_inner -->
	
</section><!-- section_four -->