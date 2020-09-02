<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/page_banner/template','bio_banner'); ?>

	<div id='page_wrapper'>
	
   	<div id='page_content'>

		<?php get_template_part('page-templates/includes/att_bio_template_parts/template','profile_image'); ?>

 				<div id='page_content_inner' class="content">
				
					<?php get_template_part( 'loop', 'page' ); ?>

				</div><!-- page_content_inner -->
    	
    	</div><!-- page_content -->

		
		 <?php if(!get_field('disable_sidebar')) {

			get_sidebar('bio');

			} ?>

	</div><!-- page_wrapper -->

</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
