
<div id="sidebar_wrapper">

	<div id='sidebar_form'>

		<span id='sidebar_form_title'><?php the_field( 'sidebar_form_title','option'); ?></span><!-- sidebar_form_title -->

		<span id='sidebar_form_subtitle'><?php the_field( 'sidebar_subtitle','option'); ?></span><!-- sidebar_form_title -->
	
		<?php gravity_form(4, false, false, false, '', true, 1233); ?>

		<span id='form_required'><span>*</span>Required Field</span><!-- form_required -->
	
	</div><!-- sidebar_form -->
			
	<div class="sidebar_box sidebar_pa">
				
		<?php bulk_sidebar(); ?>
				
		</div><!-- sidebar_box -->
		
	</div><!-- sidebar_wrapper -->

