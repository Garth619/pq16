
				<div class='sec_six_post'>
				
					<div class='sec_six_meta'>
					
						<span class='sec_six_date'><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- sec_six_date -->

						<?php echo get_the_category_list();?>

					</div><!-- sec_six_meta -->

					<div class='sec_six_page_title_wrapper'>

						<a href='<?php the_permalink();?>'>
						
							<?php if(has_post_thumbnail()) { ?>
									
								<div class="sec_six_image">

									<?php 
									
										$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );

								 		$image_id = get_post_thumbnail_id();

										$alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

									?>

									<img class="lazyload" data-src='<?php echo $url;?>' alt='<?php echo $alt;?>'/>

								</div><!-- sec_six_image -->

							<?php } ?>
							
							<span class='sec_six_page_title <?php if(has_post_thumbnail()) {echo "has_image";}?>'><?php the_title();?></span><!-- sec_six_page_title -->

						</a>
						
					</div><!-- sec_six_page_title_wrapper -->

					<span class='sec_six_divider <?php if(!has_post_thumbnail()) {echo "no_image";}?>'></span><!-- sec_six_divider -->

					<div class='sec_six_descrip'>

						<a href='<?php the_permalink();?>'>
					
							<p><?php echo wp_trim_words( get_the_content(), 40, '...' );?></p>

						</a>
					
					</div><!-- sec_six_descrip -->

					<a href="<?php the_permalink();?>" class='sec_six_readmore button_four'>Read More</a><!-- button_four -->

				</div><!-- sec_six_post -->
			
