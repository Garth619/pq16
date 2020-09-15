<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">

<div id='att_banner'>
	
	<div id='att_banner_content'>

			<div id='att_banner_left'>
			
			
			</div><!-- att_banner_left -->

			<div id='att_banner_right'>
			
				<h1 class="att_title"><?php the_title();?></h1><!-- banner_title -->

				<div class='att_subtitle'>
			
					<span><?php the_field( 'position' ); ?></span>
			
				</div><!-- att_subtitle -->

			</div><!-- att_banner_right -->

	</div><!-- att_banner_content -->
	
</div><!-- att_banner -->

	<div id='page_wrapper'>

		<?php if(!get_field('disable_sidebar')) {

			get_sidebar('bio');

		} ?>
	
   	<div id='page_content'>

			<div id='page_content_inner' class="content">

				<div id='att_intro'>
				
					<?php the_field( 'attorney_intro' ); ?>
				
				</div><!-- att_intro -->

				<?php the_field( 'attorney_content' ); ?>

			</div><!-- page_content_inner -->
    	
    </div><!-- page_content -->

	</div><!-- page_wrapper -->

</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
