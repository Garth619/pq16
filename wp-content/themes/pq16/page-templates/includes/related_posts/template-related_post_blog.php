<div id='related_content_wrapper'>
	
		<div id='related_content_inner'>
		
			<span id='related_content_title'>Related Content</span><!-- related_content_title -->

			<div id='related_posts_wrapper'>
			
				<div class='related_post_inner'>

					<span class='related_posts_title'>Related News</span><!-- related_posts_title -->
					
					<div class='related_post_list'>

					<?php

						global $post;

						$related_posts_number = get_field( 'number_of_related_posts_to_show' );

						if($related_posts_number) {
							$pagenumber = $related_posts_number;
						} else {
							$pagenumber = 10;
						}

						$post_terms = get_the_terms( $post->ID, 'category' );
							if (!empty( $post_terms) ){
								$myterms = array();
								foreach($post_terms as $post_term) {
									$myterm_slug[] = $post_term->slug;
								}
								$current_post_terms = array_merge($myterms, $myterm_slug);
							}
						
						//$stickies = get_option( 'sticky_posts' );

						// https://wordpress.stackexchange.com/questions/104127/display-all-sticky-post-before-regular-post

						$the_query = new WP_Query( array(
							'post_type' => 'post',
							'posts_per_page' => $pagenumber,
							'post__not_in' => array($post->ID),
							//'post__in'  => $stickies,
							// https://www.billerickson.net/code/wp_query-arguments/ post__in and post__not_in and sticky look into it here
							//'ignore_sticky_posts' => 1,
							'tax_query' => array(
							array (
									'taxonomy' => 'category',
									'field' => 'slug',
									'terms' => $current_post_terms,
								)
							),
						));

						while ( $the_query->have_posts() ) :
						$the_query->the_post();?>
		
							<div class='related_post'>
							
									<div class='related_posts_meta'>
					
										<span class='related_posts_date'><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- related_posts_date -->

										<?php if(is_singular()) {

											echo get_the_category_list();

										} 

										if(is_page()) {

											$terms = get_the_terms( $post->ID, 'category' ); 
										
												echo "<ul>";

												foreach($terms as $term) {

													echo "<li>" . $term->name . "</li>";
												
												}
										
												echo "</ul>";
											
										}
										
										?>

									</div><!-- related_posts_meta -->

									<a href="<?php the_permalink();?>">

									<span class='related_post_title'><?php the_title();?></span><!-- post_title -->

									<span class='related_post_author'>By: <?php the_author();?></span><!-- related_post_author -->

									<span class='related_post_read_more button_four'>Read More</span><!-- read_more -->
								
								</a>
							
							</div><!-- related_post -->

						<?php endwhile;
						wp_reset_postdata(); ?>

						</div><!-- related_post_list -->
					
					</div><!-- related_post_inner -->

			</div><!-- related_posts_wrapper -->
		
		</div><!-- related_content_inner -->
	
	</div><!-- related_content_wrapper -->