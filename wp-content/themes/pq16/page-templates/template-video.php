<?php 

/* Template Name: Video Center */

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/page_banner/template','page_banner'); ?>
	
	<div id='page_wrapper' class="video_page_wrapper one_col">
	
		<div id='video_center_wrapper'>

				<?php if ( have_rows( 'video_center_' ) ) : ?>
					<?php while ( have_rows( 'video_center_' ) ) : the_row(); ?>
				
						<?php if(get_field('wistia_or_youtube') == "Youtube" ) { ?>

							<div class="single_video video_module">

								<a href="https://www.youtube.com/embed/<?php the_sub_field( 'youtube_id_video_center' ); ?>" data-lity>

									<div class='single_video_thumbnail'>
									
									<div class='video_overlay'>

										<span class='play_button'></span><!-- play_button -->

									</div><!-- video_overlay -->

									<?php if(get_sub_field('video_thumbnail_select') == "Leave Blank" ) { ?>

										<img src="https://img.youtube.com/vi/<?php the_sub_field( 'youtube_id_video_center' ); ?>/0.jpg"/>

									<?php } ?>

									<?php if(get_sub_field('video_thumbnail_select') == "Add Thumbnail Image" ) { ?>

										<?php $video_thumbnail_video_center = get_sub_field( 'video_thumbnail_video_center' ); ?>
				
										<img src="<?php echo $video_thumbnail_video_center['url']; ?>" alt="<?php echo $video_thumbnail_video_center['alt']; ?>" />

									<?php } ?>

									

									</div><!-- single_video_thumbnail -->

									<span class='video_title'><?php the_sub_field( 'video_title_video_center' ); ?></span><!-- video_title -->
			
								</a>

							</div><!-- single_video -->

						<?php } ?>

						<?php if(get_field('wistia_or_youtube') == "Wistia" ) { ?>

							<div class="single_video video_module">

								<div class='single_video_thumbnail'>

										<?php if(get_sub_field('video_thumbnail_select') == "Add Thumbnail Image" ) { ?>

											<div class='mywistia wistia_embed wistia_async_<?php the_sub_field( 'wistia_id_video_center' ); ?> popover=true popoverContent=html'></div><!-- mywistia -->

										<?php } ?>

										<?php if(get_sub_field('video_thumbnail_select') == "Leave Blank" ) { ?>

											<div class="mywistia_thumbnail">

												<div class='mywistia wistia_embed wistia_async_<?php the_sub_field( 'wistia_id_video_center' ); ?> popover=true popoverContent=thumbnail'></div><!-- mywistia -->

											</div><!-- mywistia_thumbnail -->

										<?php } ?>

										<div class='video_overlay'>

											<span class='play_button'></span><!-- play_button -->

										</div><!-- video_overlay -->

									<?php if(get_sub_field('video_thumbnail_select') == "Add Thumbnail Image" ) { ?>

										<?php $video_thumbnail_video_center = get_sub_field( 'video_thumbnail_video_center' ); ?>

											<img src="<?php echo $video_thumbnail_video_center['url']; ?>" alt="<?php echo $video_thumbnail_video_center['alt']; ?>" />

										<?php } ?>

										</div><!-- single_video_thumbnail -->

									<span class='video_title'><?php the_sub_field( 'video_title_video_center' ); ?></span><!-- video_title -->

							</div><!-- single_video -->

					<?php } ?>
		
				<?php endwhile; ?>
			
			<?php endif; ?>
		
		</div><!-- video_center_wrapper -->
	
	</div><!-- page_wrapper -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>

<?php if(get_field('wistia_or_youtube') == "Wistia" ) { ?>

	<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

<?php } ?>