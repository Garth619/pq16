<section id='section_two'>

	<div id='sec_two_inner'>

		<div id='sec_two_top'>

			<div id='sec_two_top_inner'>
			
			<div id='sec_two_left_slider' class="preload_slider">

			<?php if ( have_rows( 'section_two_testimonials' ) ) : ?>
				
				<?php while ( have_rows( 'section_two_testimonials' ) ) : the_row(); ?>
		
					<div class='sec_two_slide'>
					
						<div class='sec_two_slide_profile_wrapper'>
						
							<div class='sec_two_profile'>

								<picture>

									<?php $profile_webp = get_sub_field( 'profile_webp' ); ?>

									<?php if ( $profile_webp ) { ?>
										
										<source srcset='<?php echo $profile_webp['url']; ?>' type='image/webp'>
									
									<?php } ?>
								
									<?php $profile = get_sub_field( 'profile' ); ?>
								
									<img src='<?php echo $profile['url']; ?>' alt="<?php echo $profile['alt']; ?>" />
								
								</picture>
						
							</div><!-- sec_two_profile -->

							<div class='sec_two_profile_info'>
							
								<img src='<?php bloginfo('template_directory');?>/images/stars.svg' alt=''/><!-- name -->

								<span class='sec_two_profile_two'><?php the_sub_field( 'name' ); ?></span><!-- sec_two_profile_two -->
							
							</div><!-- sec_two_profile_info -->
						
						</div><!-- sec_two_slide_profile_wrapper -->

						<div class='sec_two_slide_descrip'>
							
								<span><?php the_sub_field( 'description' ); ?></span>
							
							</div><!-- sec_two_slide_descrip -->

							<span class='sec_two_slide_type'><?php the_sub_field( 'type' ); ?></span><!-- sec_two_slide_type -->
				
					</div><!-- sec_two_slide -->

				<?php endwhile; ?>

			<?php endif; ?>
			
			</div><!-- sec_two_left_slider -->

			<div id='sec_two_top_arrows'>
			
				<div class='sec_two_arrow_left sec_two_arrow'></div><!-- sec_two_arrow -->

				<div class='sec_two_arrow_right sec_two_arrow'></div><!-- sec_two_arrow -->
			
			</div><!-- sec_two_top_arrows -->

			</div><!-- sec_two_top_inner -->
		
		</div><!-- sec_two_top -->

		<div id='sec_two_bottom'>
		
			<div id='sec_two_bottom_inner' class="preload_section">
			
				<span id='sec_two_featured_title'><?php the_field( 'section_two_featured_lawsuit_title' ); ?></span><!-- sec_two_featured_title -->

					<div id='sec_two_featured_slider_wrapper'>

						<div class='sec_two_featured_arrow_left sec_two_featured_arrow'></div><!-- sec_two_featured_arrow -->
					
							<div id='sec_two_featured_slider' class="preload_slider">

								<?php if ( have_rows( 'section_two_post_slider' ) ) : ?>
								
									<?php while ( have_rows( 'section_two_post_slider' ) ) : the_row(); ?>

										<?php $post_object = get_sub_field( 'sec_two_post_page' ); ?>
									
											<?php if ( $post_object ): ?>
											
												<?php $post = $post_object; ?>
												
												<?php setup_postdata( $post ); ?> 
								
												<div class='sec_two_featured_slide'>

													<a href="<?php the_permalink();?>">

														<div class='sec_two_featured_image'>
														
															<picture>

																<?php $image_webp = get_sub_field( 'image_webp' ); ?>
										
																<?php if ( $image_webp ) { ?>
																	
																	<source srcset='<?php echo $image_webp['url']; ?>' type='image/webp'>
																
																<?php } ?>

																<?php $image = get_sub_field( 'image' ); ?>
															
																<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

															</picture>
					
														</div><!-- sec_two_featured_image -->

														<div class='sec_two_featured_slide_content'>
														
															<span class='sec_two_featured_slide_title'><?php the_title();?></span><!-- class -->

															<div class='sec_two_featured_slide_descrip'>
															
																<p><?php the_sub_field( 'description' ); ?></p>
															
															</div><!-- sec_two_featured_slide_descrip -->
															
															<div class='learn_more_wrapper'>
															
																<span class='button_two'><?php the_sub_field( 'button_verbiage' ); ?></span><!-- button_two -->
															
															</div><!-- learn_more_wrapper -->

														</div><!-- sec_two_featured_slide_content -->

													</a>

												</div><!-- sec_two_featured_slide -->
												
												<?php wp_reset_postdata(); ?>
											
											<?php endif; ?>
									
									<?php endwhile; ?>

								<?php endif; ?>
						
							</div><!-- sec_two_featured_slider -->
						
							<div class='sec_two_featured_arrow_right sec_two_featured_arrow'></div><!-- sec_two_featured_arrow -->
					
					</div><!-- sec_two_featured_slider_wrapper -->

			</div><!-- sec_two_bottom_inner -->
		
		</div><!-- sec_two_bottom -->
	
	</div><!-- sec_two_inner -->

</section><!-- section_two -->