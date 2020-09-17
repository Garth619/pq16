
<div id="sidebar_wrapper">

	<div id='sidebar_inner'>	

		<div id='sidebar_form'>

			<img id='sidebar_form_icon' src='<?php bloginfo('template_directory');?>/images/ico-sp-3.svg' alt=''/>

			<span id='sidebar_form_title'><?php the_field('sidebar_form_title','option');?></span><!-- sidebar_form_title -->
	
			<?php gravity_form(7, false, false, false, '', true, 1233); ?>

			<span id='sidebar_form_required'>All Fields Required <span>*</span></span><!-- form_required -->
	
		</div><!-- sidebar_form -->
			
		<div class="sidebar_box sidebar_pa">

			<div class='sidebar_slide_title sidebar_title_pa'>
		
				<span>
					
					<?php if(get_field('practice_area_sidebar_slide_title')) :

						the_field('practice_area_sidebar_slide_title');

					else:

						echo "View Practice Areas";

					endif; ?>

				</span>
		
			</div><!-- sidebar_slide_title -->
				
			<?php bulk_sidebar(); ?>
				
			</div><!-- sidebar_box -->

		</div><!-- sidebar_inner -->
		
	</div><!-- sidebar_wrapper -->

