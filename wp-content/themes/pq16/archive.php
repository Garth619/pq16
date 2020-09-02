<?php get_header(); ?>

<div id="internal_main">
	
	<?php get_template_part('page-templates/includes/page_banner/template','blog_banner'); ?>
				
	<div id='page_wrapper'>

 			<div id='page_content' class="content">
				
					<?php get_template_part( 'loop', 'index' ); ?>

			</div><!-- page_content -->

			<?php if(!get_field('disable_sidebar')) {

			get_sidebar('blog');

			} ?>
				
	</div><!-- page_wrapper -->	
	
</div><!-- internal_main -->


<?php get_footer(); ?>
