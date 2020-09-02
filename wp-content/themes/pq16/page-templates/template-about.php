<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/page_banner/template','page_banner'); ?>
	
	<div id='page_wrapper' class="one_col">
	
		<div id='about_top_wrapper'>

		<span class='about_title firm_title'><?php the_field( 'about_firm_subtitle' ); ?></span><!-- about_title -->

		<div class='about_description content'>
		
			<?php the_field( 'about_content' ); ?>
		
		</div><!-- about_description -->

		<div id='about_quote'>

			<div id='about_quote_inner'>
			
				<?php the_field( 'about_quote' ); ?>
			
			</div><!-- about_quote_inner -->

			<div id="about_quote_img">
			
				<?php $about_quote_logo = get_field( 'about_quote_logo' ); ?>
				
				<?php if ( $about_quote_logo ) { ?>
				
					<img src="<?php echo $about_quote_logo['url']; ?>" alt="<?php echo $about_quote_logo['alt']; ?>" />
				
				<?php } ?>
			
			</div>
			
		</div><!-- about_quote -->
		
		</div><!-- about_top_wrapper -->

		<?php $meet_attorneys = get_field( 'meet_attorneys' ); ?>
		
		<?php if ( $meet_attorneys ): ?>
			<div id='meet_attorneys'>
		
		<span class='about_title meet_title'><?php the_field( 'meet_the_attorneys_subtitle' ); ?></span><!-- about_title -->

		<div id='meet_attorneys_inner'>
			<?php foreach ( $meet_attorneys as $post ):  ?>
			<?php setup_postdata ( $post ); ?>
			<div class='single_att'>
				
				<a href="<?php the_permalink();?>">
				
					<div class='single_attorney_profile'>
					
						<div class='single_att_overlay'></div><!-- single_att_overlay -->

						<?php $attorney_profile = get_field( 'attorney_profile' ); ?>

						<?php if ( $attorney_profile ) : ?>
		
							<img class="att_image" src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />

							<?php else: ?>

							<div class="placeholder">

								<div class='placeholder_inner'></div><!-- placeholder_inner -->

									<img class="att_image" src='<?php bloginfo('template_directory');?>/images/placeholder.jpg' alt="Placeholder Profile Image"/>

							</div><!-- placeholder -->

						<?php endif;?>
					
					</div><!-- single_attorney_profile -->

					<span class='single_att_name'><?php the_title();?></span><!-- single_att_name -->

					<span class='single_att_position'><?php the_field( 'position' ); ?></span><!-- single_att_position -->

					<span class='button_two'>Learn More</span><!-- button_two -->
					
				</a>
			
			</div><!-- single_att -->
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
			</div><!-- meet_attorneys_inner -->
		
		</div><!-- meet_attorneys -->
		<?php endif; ?>
	
	</div><!-- page_wrapper -->
	
</div><!-- internal_main -->
		
<?php get_footer(); ?>
