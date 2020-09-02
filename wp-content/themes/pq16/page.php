<?php get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/page_banner/template','page_banner'); ?>

	<div id='page_wrapper'>
	
   	<div id='page_content'>

				<?php if ( have_rows( 'page_overview' ) ) : ?>
					<ul id='page_meta'>
					<?php while ( have_rows( 'page_overview' ) ) : the_row(); ?>
						<li><?php the_sub_field( 'list_item' ); ?></li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
    
    		<?php if(get_field('banner_h1') == "Yes") : ?>
   			
   			<h2 class="internal_title page_title"><?php the_title();?></h2>
   		
   		<?php else:?>
   		
   			<h1 class="internal_title page_title"><?php the_title();?></h1>
   		
   		<?php endif;?>

 				<div id='page_content_inner' class="content">
				
					<?php get_template_part( 'loop', 'page' ); ?>

				</div><!-- page_content_inner -->
    	
    	</div><!-- page_content -->

		
		 <?php if(!get_field('disable_sidebar')) {

			get_sidebar();

			} ?>

	</div><!-- page_wrapper -->

	<?php get_template_part('page-templates/includes/related_posts/template','related_post_pages'); ?>

</div><!-- internal_main -->
		

<?php get_footer(); ?>
