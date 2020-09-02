<div id='related_content_wrapper'>
	
		<div id='related_content_inner'>
		
			<span id='related_content_title'>Related Content</span><!-- related_content_title -->

			<div id='related_posts_wrapper'>
			
				<div class='related_post_col'>

					<span class='related_posts_title'>Related News</span><!-- related_posts_title -->
					
					<div class='related_post_list'>

					<?php

						$page_taxonomy = get_query_var( 'taxonomy' );
						$page_term = get_query_var( 'term' );// doesnt work on pages


						// get page id
						// get current id's tax
						// get current taxs array of terms
						// add inot the terms below 

						$the_query = new WP_Query( array(
							'post_type' => 'page',
							'tax_query' => array(
							array (
									'taxonomy' => 'page_categories',
									'field' => 'slug',
									'terms' => 'dangerous-drugs	',
								)
							),
						));

						while ( $the_query->have_posts() ) :
						$the_query->the_post();?>
		
							<div class='related_post'>
							
							
								
									<div class='related_posts_meta'>
					
										<span class='related_posts_date'><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- related_posts_date -->

									
										<?php $terms = get_the_terms( $post->ID, 'page_categories' ); 
										
										echo "<ul>";

										foreach($terms as $term) {
											
											echo "<li>" . $term->name . "</li>";
										
										}
										
										echo "</ul>";
										
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
					
					</div><!-- related_post_col -->

					<div class='related_post_col'>
				
					<span class='related_posts_title'>Related News</span><!-- related_posts_title -->
					
						<div class='related_post_list'>
						
							<div class='related_post'>
							
								<a href="">
								
									<div class='related_posts_meta'>
					
										<span class='related_posts_date'>June 24, 2020</span><!-- related_posts_date -->

										<ul>
											<li><a href="">Dangerous Drugs</a></li>
										</ul>

									</div><!-- related_posts_meta -->

									<span class='related_post_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- post_title -->

									<span class='related_post_author'>By: Steve Estey</span><!-- related_post_author -->

									<span class='related_post_read_more button_four'>Read More</span><!-- read_more -->
								
								</a>
							
							</div><!-- related_post -->

							<div class='related_post'>
							
								<a href="">
								
									<div class='related_posts_meta'>
					
										<span class='related_posts_date'>June 24, 2020</span><!-- related_posts_date -->

										<ul>
											<li><a href="">Dangerous Drugs</a></li>
										</ul>

									</div><!-- related_posts_meta -->

									<span class='related_post_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- post_title -->

									<span class='related_post_author'>By: Steve Estey</span><!-- related_post_author -->

									<span class='related_post_read_more button_four'>Read More</span><!-- read_more -->
								
								</a>
							
							</div><!-- related_post -->
						
						</div><!-- related_post_list -->
					
					</div><!-- related_post_col -->

					<div class='related_post_col'>
				
					<span class='related_posts_title'>Related News</span><!-- related_posts_title -->
					
						<div class='related_post_list'>
						
							<div class='related_post'>
							
								<a href="">
								
									<div class='related_posts_meta'>
					
										<span class='related_posts_date'>June 24, 2020</span><!-- related_posts_date -->

										<ul>
											<li><a href="">Dangerous Drugs</a></li>
										</ul>

									</div><!-- related_posts_meta -->

									<span class='related_post_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- post_title -->

									<span class='related_post_author'>By: Steve Estey</span><!-- related_post_author -->

									<span class='related_post_read_more button_four'>Read More</span><!-- read_more -->
								
								</a>
							
							</div><!-- related_post -->

							<div class='related_post'>
							
								<a href="">
								
									<div class='related_posts_meta'>
					
										<span class='related_posts_date'>June 24, 2020</span><!-- related_posts_date -->

										<ul>
											<li><a href="">Dangerous Drugs</a></li>
										</ul>

									</div><!-- related_posts_meta -->

									<span class='related_post_title'>The FDA Requests Market Withdrawal of all Zantac Products</span><!-- post_title -->

									<span class='related_post_author'>By: Steve Estey</span><!-- related_post_author -->

									<span class='related_post_read_more button_four'>Read More</span><!-- read_more -->
								
								</a>
							
							</div><!-- related_post -->
						
						</div><!-- related_post_list -->
					
					</div><!-- related_post_col -->
			
			</div><!-- related_posts_wrapper -->
		
		</div><!-- related_content_inner -->
	
	</div><!-- related_content_wrapper -->