<section id='section_three'>

	<div id='sec_three_inner'>
	
		<div id='sec_three_left'>
		
			<div id='sec_three_left_inner'>
			
				<span id='sec_three_left_descrip'><?php the_field( 'section_three_large_description' ); ?></strong></span><!-- sec_three_left_descrip -->

				<?php if(get_field('section_three_button_verbiage') && get_field('section_three_button_link')) { ?>

					<a class='button free_consult_button' href='<?php the_field( 'section_three_button_link' ); ?>'><span><?php the_field( 'section_three_button_verbiage' ); ?></span></a><!-- button -->

				<?php } ?>

			</div><!-- sec_three_inner -->

			<?php $section_three_logo = get_field( 'section_three_logo' ); ?>

			<?php if ( $section_three_logo ) { ?>
			
					<img id="eb_graphic" class="lazyload" data-src="<?php echo $section_three_logo['url']; ?>" alt="<?php echo $section_three_logo['alt']; ?>" />
			
			<?php } ?>

		
		</div><!-- sec_three_left -->

		<div id='sec_three_right' class="content">
		
			<h1 id="sec_three_header" class='page_header'><?php the_field( 'section_three_title' ); ?></h1><!-- page_header -->

			<div id='sec_three_content'>
			
				<?php the_field( 'section_three_content' ); ?>

			</div><!-- sec_three_content -->
		
		</div><!-- sec_three_right -->

	</div><!-- sec_three_inner -->

</section><!-- section_three -->