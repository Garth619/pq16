<?php get_header(); ?>

<div id="internal_main">

	<div id='page_wrapper'>
	
   	<div id='page_content'>

		 	<h1 class="page_title"><?php single_cat_title(); ?></h1>
    
    	<div id='page_content_inner' class="content">

				<?php get_template_part( 'loop', 'index' ); ?>

				</div><!-- page_content_inner -->
    	
    	</div><!-- page_content -->

			<?php if(!get_field('disable_sidebar')) {

				get_sidebar('blog');

			} ?>

	</div><!-- page_wrapper -->

</div><!-- internal_main -->


<?php get_footer(); ?>


