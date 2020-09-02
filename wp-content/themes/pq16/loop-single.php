<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id='single_post'>

<?php if ( have_rows( 'page_overview' ) ) : ?>
					<ul id='page_meta'>
					<?php while ( have_rows( 'page_overview' ) ) : the_row(); ?>
						<li><?php the_sub_field( 'list_item' ); ?></li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>

<?php if(get_field('banner_h1') == "Yes") : ?>
			
			<h2 class="blog_header"><?php the_title();?></h2>
		
		<?php else:?>
		
		<h1 class="blog_header"><?php the_title();?></h1>
		
		<?php endif;?>

		<span class='double_line'></span><!-- double_line -->
		
		<div class="blog_meta">
		
			<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span>
			
			<?php echo get_the_category_list();?>
		
		</div><!-- blog_meta -->
		
		<div class="blog_content content">
			
			<?php the_content();?>
		
		</div><!-- blog_content -->
			
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>
	
	</div><!-- single_post -->

<?php endwhile; // end of loop ?>

<?php endif; ?>