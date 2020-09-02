<section id='section_five'>

	<div id='sec_five_inner'>
	
		<span id='sec_five_header'><?php the_field( 'section_five_title' ); ?></span><!-- sec_five_header -->

		<div id='sec_five_post_wrapper'>

			<?php if ( have_rows( 'section_five_posts_pages' ) ) : ?>
				<?php while ( have_rows( 'section_five_posts_pages' ) ) : the_row(); ?>
			
			
					<?php $post_object = get_sub_field( 'post_page' ); ?>
					
					<?php if ( $post_object ): ?>
						
						<?php $post = $post_object; ?>
						<?php setup_postdata( $post ); ?> 
							

							<div class='sec_five_post'>

								<a href="<?php the_permalink();?>">

									<div class='sec_five_post_image_wrapper'>
									
										<?php $post_image = get_sub_field( 'post_image' ); ?>
					
										<?php if ( $post_image ) { ?>
											
											<img class="lazyload" data-src="<?php echo $post_image['url']; ?>" alt="<?php echo $post_image['alt']; ?>" />
					
										<?php } ?>

										<span class='post_cat_title'><?php the_sub_field( 'category' ); ?></span><!-- post_cat_title -->
									
									</div><!-- sec_five_post_image_wrapper -->

									<div class='sec_five_post_content'>
									
										<span class='sec_five_post_title'><?php the_title();?></span><!-- sec_five_post_title -->

										<span class='sec_five_post_descrip'><?php the_sub_field( 'description' ); ?></span><!-- sec_five_post_descrip -->

										<div class='sec_five_learn_more_wrapper'>
										
											<span class='button_three'><?php the_sub_field( 'button_verbiage' ); ?></span><!-- button_three -->
										
										</div><!-- sec_five_learn_more_wrapper -->
									
									</div><!-- sec_five_post_content -->

								</a>

							</div><!-- sec_five_post -->


						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				
				<?php endwhile; ?>
			<?php endif; ?>
		
		</div><!-- sec_five_post_wrapper -->

		<a id='sec_five_button' class="button" href='<?php the_field( 'section_five_view_all_page_link' ); ?>'><span><?php the_field( 'section_five_button_verbiage' ); ?></span></a><!-- class -->
	
	</div><!-- sec_five_inner -->

</section><!-- section_five -->