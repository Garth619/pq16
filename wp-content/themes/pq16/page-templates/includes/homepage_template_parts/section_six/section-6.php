<section id='section_six'>

	<div id='sec_six_inner'>
	
		<span id='sec_six_title'><?php the_field( 'section_six_title' ); ?></span><!-- sec_six_title -->

		<div id='sec_six_post_wrapper'>

		<?php if(get_field('show_latest_posts') == "Show Latest Posts") { ?>

			<?php $postnumbers = get_field('number_of_latest_posts_to_show');?>

				<?php $mymain_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => $postnumbers) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
                	
      
					<?php get_template_part('page-templates/includes/homepage_template_parts/section_six/template','secsix_post'); ?>
			
				<?php endwhile; ?>
    	<?php wp_reset_postdata(); // reset the query ?>

		<?php } ?>

	<?php if(get_field('show_latest_posts') == "Manually Add Posts as Features") { ?>

		<?php $manually_added_posts = get_field( 'manually_added_posts' ); ?>
		
		<?php if ( $manually_added_posts ): ?>
			<?php foreach ( $manually_added_posts as $post ):  ?>
			<?php setup_postdata ( $post ); ?>

				<?php get_template_part('page-templates/includes/homepage_template_parts/section_six/template','secsix_post'); ?>
			
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>


	<?php } ?>
		
		
		</div><!-- sec_six_post_wrapper -->
	
	</div><!-- sec_six_inner -->

</section><!-- section_six -->