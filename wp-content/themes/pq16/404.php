<?php get_header(); ?>

<div id="internal_main">

	<div id='page_wrapper'>
	
   	<div id='page_content'>

		 	<h1 class="page_title"><?php the_field( 'not_found_title','option'); ?></h1>
    
    	<div id='page_content_inner' class="content">

					<?php the_field( 'not_found_content','option'); ?>

				</div><!-- page_content_inner -->
    	
    	</div><!-- page_content -->

			<?php if(!get_field('disable_sidebar')) {

				get_sidebar();

			} ?>

	</div><!-- page_wrapper -->

</div><!-- internal_main -->
		

<?php get_footer(); ?>
