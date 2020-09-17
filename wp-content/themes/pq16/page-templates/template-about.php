<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">

		<div id='about_top'>

			<div id='about_top_inner'>
			
				<h1 class="internal_title center_title about_title"><?php the_title();?></h1>

				<?php if ( have_rows( 'about_subtitles' ) ) : ?>

					<div class='inner_subtitle under_title about_subtitle'>

						<ul>
				
						<?php while ( have_rows( 'about_subtitles' ) ) : the_row(); ?>
	
							<li><?php the_sub_field( 'list_items' ); ?></li>
						
						<?php endwhile; ?>

						</ul>
	
					</div><!-- inner_subtitle -->

				<?php endif; ?>

				<div id='about_intro_wrapper'>
			
					<div id='about_img_wrapper'>

					<?php $about_image = get_field( 'about_image' ); ?>
					
					<?php if ( $about_image ) { ?>
						
						<img id='about_img' src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" />
					
					<?php } ?>
				
					</div><!-- about_img_wrapper -->

					<div id='about_top_content' class="content">

						<img id='about_icon' src='<?php bloginfo('template_directory');?>/images/ico-sp-3.svg' alt="about icon svg"/>

						<div id='about_top_content_inner'>
						
							<?php the_field( 'about_intro' ); ?>

						</div><!-- about_top_content_inner -->
				
					</div><!-- about_top_content -->
			
				</div><!-- about_intro_wrapper -->

			</div><!-- about_top_inner -->
		
		</div><!-- about_top -->

		<div id='about_bottom'>
		
			<div id='about_bottom_inner' class="content">
			
				<?php the_content();?>
			
			</div><!-- about_bottom_inner -->
		
		</div><!-- about_bottom -->

</div><!-- internal_main -->
		
<?php get_footer(); ?>
