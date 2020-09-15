
<div id="sidebar_bio_wrapper">

	<div id='att_bio_img'>

		<?php $attorney_profile = get_field( 'attorney_profile' ); ?>

		<?php if ( $attorney_profile ) : ?>
		
			<img class="att_image" src="<?php echo $attorney_profile['url']; ?>" alt="<?php echo $attorney_profile['alt']; ?>" />

			<?php else: ?>

			<div class="placeholder">

				<div class='placeholder_inner'></div><!-- placeholder_inner -->

				<img class="att_image" src='<?php bloginfo('template_directory');?>/images/placeholder.jpg' alt="Placeholder Profile Image"/>

			</div><!-- placeholder -->

		<?php endif;?>

	</div><!-- att_bio_img -->

	<?php if ( have_rows( 'attorney_accolades' ) ) : ?>

		<div id='att_accolades_wrapper'>

			<div id='att_view_accolades'>
		
				<span><?php the_field( 'mobile_sidebar_slide_title' ); ?></span>
		
			</div><!-- att_view_accolades -->
		
			<div class="sidebar_box sidebar_bio">

				<?php while ( have_rows( 'attorney_accolades' ) ) : the_row(); ?>
	
					<div class='sidebar_bio_list'>
			
						<h3><?php the_sub_field( 'title' ); ?></h3>
			
						<ul>
			
							<?php if ( have_rows( 'list_items' ) ) : ?>
					
								<?php while ( have_rows( 'list_items' ) ) : the_row(); ?>
					
									<li><?php the_sub_field( 'list_item' ); ?>
									
									<?php if ( have_rows( 'subitems' ) ) : ?>

										<ul>
					
										<?php while ( have_rows( 'subitems' ) ) : the_row(); ?>

											<li><?php the_sub_field( 'subitem' ); ?></li>

										<?php endwhile; ?>

										</ul>
				
									<?php endif; ?>
									
									</li>
					
								<?php endwhile; ?>
				
							<?php endif; ?>
		
						</ul>

					</div><!-- sidebar_bio_list -->

				<?php endwhile; ?>

			</div><!-- sidebar_box -->
		
		</div><!-- att_accolades_wrapper -->
		
	<?php endif; ?>
			
</div><!-- sidebar_wrapper -->

