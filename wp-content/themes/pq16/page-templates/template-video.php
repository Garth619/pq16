<?php 

/* Template Name: Video Center */

get_header(); ?>

<div id="internal_main">

		<div id='page_wrapper' class="video_page_wrapper one_col">

			<h1 class='internal_title video_title center_title'><?php the_title();?></h1><!-- page_title -->

			<div class='inner_subtitle under_title'>

				<ul>
					<li>Experienced</li>
					<li>Resourceful</li>
					<li>Effective</li>
				</ul>
	
			</div><!-- inner_subtitle -->

			<div id='video_wrapper'>
			
				<div class='single_video'>
				
					<a href="">
					
						<div class='single_video_thumbnail'>
									
							<div class='video_overlay'>

								<?php echo file_get_contents( get_template_directory() . '/images/btn-play.svg' ); ?>

							</div><!-- video_overlay -->

							<img src="<?php bloginfo('template_directory');?>/images/video-two.jpg" alt="" />

						</div><!-- single_video_thumbnail -->

						<div class='video_title_wrapper'>
						
							<span class='video_title'>Learn why we’re considered the top law firm in Georgia</span><!-- video_title -->
						
						</div><!-- video_title_wrapper -->

					</a>
				
				</div><!-- single_video -->

				<div class='single_video'>
				
					<a href="">
					
						<div class='single_video_thumbnail'>
									
							<div class='video_overlay'>

								<?php echo file_get_contents( get_template_directory() . '/images/btn-play.svg' ); ?>

							</div><!-- video_overlay -->

							<img src="<?php bloginfo('template_directory');?>/images/video-two.jpg" alt="" />

						</div><!-- single_video_thumbnail -->

						<div class='video_title_wrapper'>
						
							<span class='video_title'>Learn why we’re considered the top law firm in Georgia</span><!-- video_title -->
						
						</div><!-- video_title_wrapper -->

					</a>
				
				</div><!-- single_video -->

				<div class='single_video'>
				
					<a href="">
					
						<div class='single_video_thumbnail'>
									
							<div class='video_overlay'>

								<?php echo file_get_contents( get_template_directory() . '/images/btn-play.svg' ); ?>

							</div><!-- video_overlay -->

							<img src="<?php bloginfo('template_directory');?>/images/video-two.jpg" alt="" />

						</div><!-- single_video_thumbnail -->

						<div class='video_title_wrapper'>
						
							<span class='video_title'>Learn why we’re considered the top law firm in Georgia</span><!-- video_title -->
						
						</div><!-- video_title_wrapper -->

					</a>
				
				</div><!-- single_video -->

				<div class='single_video'>
				
					<a href="">
					
						<div class='single_video_thumbnail'>
									
							<div class='video_overlay'>

								<?php echo file_get_contents( get_template_directory() . '/images/btn-play.svg' ); ?>

							</div><!-- video_overlay -->

							<img src="<?php bloginfo('template_directory');?>/images/video-two.jpg" alt="" />

						</div><!-- single_video_thumbnail -->

						<div class='video_title_wrapper'>
						
							<span class='video_title'>Learn why we’re considered the top law firm in Georgia</span><!-- video_title -->
						
						</div><!-- video_title_wrapper -->

					</a>
				
				</div><!-- single_video -->

				<div class='single_video'>
				
					<a href="">
					
						<div class='single_video_thumbnail'>
									
							<div class='video_overlay'>

								<?php echo file_get_contents( get_template_directory() . '/images/btn-play.svg' ); ?>

							</div><!-- video_overlay -->

							<img src="<?php bloginfo('template_directory');?>/images/video-two.jpg" alt="" />

						</div><!-- single_video_thumbnail -->

						<div class='video_title_wrapper'>
						
							<span class='video_title'>Learn why we’re considered the top law firm in Georgia</span><!-- video_title -->
						
						</div><!-- video_title_wrapper -->

					</a>
				
				</div><!-- single_video -->
			
			</div><!-- video_wrapper -->

		</div><!-- page_wrapper -->

</div><!-- internal_main -->

				
		
	

<?php get_footer(); ?>

<?php if(get_field('wistia_or_youtube') == "Wistia" ) { ?>

	<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

<?php } ?>