<?php get_header(); ?>

<div id="internal_main">

<div id='internal_banner'>
	
		<div id='internal_banner_content'>

			<h1 class="internal_title banner_title"><?php the_field( 'not_found_title','option'); ?></h1><!-- banner_title -->
				
		</div><!-- internal_banner_content -->

		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		
		<img id='banner_hero' src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->

	</div><!-- internal_banner -->

	<div id='page_wrapper' class="not_found_page_wrapper one_col">

	<div id='not_found_wrapper'>
	
		
	
			<div id='not_found_content' class="content">
				
				<?php the_field( 'not_found_content','option'); ?>
				
			</div><!-- not_found_content -->
	
		</div><!-- not_found_wrapper -->

		<?php get_template_part('page-templates/includes/main_form/template','main_form');?>

	</div><!-- page_wrapper -->

</div><!-- internal_main -->

		
			
<?php get_footer(); ?>