<?php 

/* Template Name: PA Directory */

get_header(); ?>

<div id="internal_main">

	<?php get_template_part('page-templates/includes/page_banner/template','page_banner'); ?>

		<div id='page_wrapper' class="pa_directory_page_wrapper one_col">

			<?php if(get_field('practice_area_directory')): ?>
				
				<ul class="pa_directory_top_menu">
			
					<?php while(has_sub_field('practice_area_directory')): ?>

					<li>
					
						<a><?php the_sub_field( 'title' ); ?></a>
				
						<?php $obj = get_sub_field('pa_nav_menu'); ?>
			
						<?php wp_nav_menu( array( 'menu' => $obj->name) ); ?>
				
				</li>
				
					<?php endwhile; ?>

				</ul><!-- pa_directory_top_menu -->

			<?php endif; ?>

		</div><!-- page_wrapper -->

</div><!-- internal_main -->

		
<?php get_footer(); ?>
