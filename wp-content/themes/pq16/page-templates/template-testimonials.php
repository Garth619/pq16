<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/page_banner/template','page_banner'); ?>
	
	<div id='page_wrapper' class='testimonials_page_wrapper one_col'>
	
		<div id='testimonials_video_wrapper'>

			<?php if ( have_rows( 'testimonials_video' ) ) : ?>
				
				<?php while ( have_rows( 'testimonials_video' ) ) : the_row(); ?>

					<?php if(get_field('wistia_or_youtube_testi') == "Youtube" ) { ?>

						<div class="single_video_testimonial video_module">

							<a href="https://www.youtube.com/embed/<?php the_sub_field( 'youtube_id_testi' ); ?>" data-lity>

								<div class='single_video_thumbnail'>
								
									<div class='video_overlay'>

										<span class='play_button'></span><!-- play_button -->

									</div><!-- video_overlay -->

									<?php if(get_sub_field('video_thumbnail_select_testi') == "Leave Blank" ) { ?>

										<img src="https://img.youtube.com/vi/<?php the_sub_field( 'youtube_id_testi' ); ?>/0.jpg"/>

									<?php } ?>

									<?php if(get_sub_field('video_thumbnail_select_testi') == "Add Thumbnail Image" ) { ?>

										<?php $video_thumbnail_video_center_testi = get_sub_field( 'video_thumbnail_video_center_testi' ); ?>
		
										<img src="<?php echo $video_thumbnail_video_center_testi['url']; ?>" alt="<?php echo $video_thumbnail_video_center_testi['alt']; ?>" />
									
									<?php } ?>

								</div><!-- single_video_thumbnail -->

								<span class='video_title'><?php the_sub_field( 'video_title_testi' ); ?></span><!-- video_title -->

							</a>

						</div><!-- single_video_testimonial -->

					<?php } ?>

					<?php if(get_field('wistia_or_youtube_testi') == "Wistia" ) { ?>

						<div class="single_video_testimonial video_module">

							<div class='single_video_thumbnail'>

									<?php if(get_sub_field('video_thumbnail_select_testi') == "Add Thumbnail Image" ) { ?>

										<div class='mywistia wistia_embed wistia_async_<?php the_sub_field( 'wistia_id_testi' ); ?> popover=true popoverContent=html'></div><!-- mywistia -->

									<?php } ?>

									<?php if(get_sub_field('video_thumbnail_select_testi') == "Leave Blank" ) { ?>

										<div class="mywistia_thumbnail">

											<div class='mywistia wistia_embed wistia_async_<?php the_sub_field( 'wistia_id_testi' ); ?> popover=true popoverContent=thumbnail'></div><!-- mywistia -->

										</div><!-- mywistia_thumbnail -->

									<?php } ?>

									<div class='video_overlay'>

										<span class='play_button'></span><!-- play_button -->

									</div><!-- video_overlay -->

								<?php if(get_sub_field('video_thumbnail_select_testi') == "Add Thumbnail Image" ) { ?>

									<?php $video_thumbnail_video_center_testi = get_sub_field( 'video_thumbnail_video_center_testi' ); ?>
		
									<img src="<?php echo $video_thumbnail_video_center_testi['url']; ?>" alt="<?php echo $video_thumbnail_video_center_testi['alt']; ?>" />
	
								<?php } ?>

								</div><!-- single_video_thumbnail -->

								<span class='video_title'><?php the_sub_field( 'video_title_testi' ); ?></span><!-- video_title -->

						</div><!-- single_video_testimonial -->

				<?php } ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</div><!-- testimonials_video_wrapper -->

	<div id='testimonials_text_wrapper'>

		<div class='testimonials_col'>

			<?php if ( have_rows( 'testimonials_column_one_new' ) ) : ?>
				<?php while ( have_rows( 'testimonials_column_one_new' ) ) : the_row(); ?>
			
				<div class='single_testimonial'>
			
					<img src='<?php bloginfo('template_directory');?>/images/stars.svg' alt=''/>

					<div class='single_testimonial_descrip content'>
		
						<?php the_sub_field( 'description' ); ?>
		
					</div><!-- single_testimonial_descrip content -->

					<span class='single_testimonial_name'><?php the_sub_field( 'name' ); ?></span><!-- single_testimonial_name -->

				</div><!-- single_testimonial -->
				
				<?php endwhile; ?>
			<?php endif; ?>

		</div><!-- testimonials_col -->

		<div class='testimonials_col'>

			<?php if ( have_rows( 'testimonials_column_two_new' ) ) : ?>
				<?php while ( have_rows( 'testimonials_column_two_new' ) ) : the_row(); ?>
			
				<div class='single_testimonial'>
			
					<img src='<?php bloginfo('template_directory');?>/images/stars.svg' alt=''/>

					<div class='single_testimonial_descrip content'>
		
						<?php the_sub_field( 'description' ); ?>
		
					</div><!-- single_testimonial_descrip content -->

					<span class='single_testimonial_name'><?php the_sub_field( 'name' ); ?></span><!-- single_testimonial_name -->

				</div><!-- single_testimonial -->
				
				<?php endwhile; ?>
			<?php endif; ?>

		</div><!-- testimonials_col -->
	
	</div><!-- testimonials_text_wrapper -->

	</div><!-- page_wrapper -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>

<?php if(get_field('wistia_or_youtube_testi') == "Wistia" ) { ?>

<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

<?php } ?>
