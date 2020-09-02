<?php
/*

***************************************************
Bulk Sidebar Content Template
***************************************************

DO NOT EDIT THIS PLUGIN'S COPY!!
If the sidebar needs to be customized, copy and paste this template and set a new `sidebar.php` template in your theme and modify the code there

*/

//check for page's own custom sidebar first
	if ( get_field('sm_custom_menu') ): ?>
		<?php
			//get options settings
			$widget_class = get_field('sm_widget_class','option');
			$title_class = get_field('sm_title_class','option');
			$title_tag = (get_field('sm_title_tag','option')) ? get_field('sm_title_tag','option') : bulk_get_default('title_tag');
			$menu_depth = (get_field('sm_depth','option') ) ? get_field('sm_depth','option') : bulk_get_default('menu_depth');
			$default_title = ( get_field('sm_default_title','option') ) ?  get_field('sm_default_title','option') : bulk_get_default('default_title');
		?>
			<!-- custom sidebar -->
			<div class="widget acf-custom-menu <?=$widget_class; ?>">
				
				<<?=$title_tag; ?> class="widget-title <?=$title_class; ?>">
					
					<?php if(get_field('sm_custom_title')){
						the_field('sm_custom_title');

					//ACF doesnt somehow get the default set value for the acf value when the options page is not flushed like permalinks. output a basic ass bitch title
					}else{ 
						echo $default_title;
					} ?>
				
				</<?=$title_tag; ?>>

				<?php
					wp_nav_menu(array(
						'menu' => get_field('sm_custom_menu'),
						'container' => 'ul',
						'depth' => $menu_depth
					));
				?>

			</div>
		<?php

//then check for blog and posts
	elseif(
		is_home()
		|| is_singular('post')
		|| (
			!is_post_type_archive()
			&& is_archive()
		)
	): 
		if(
			is_active_sidebar( '_ilaw_sm_blog_sidebar' )
		):
			echo '<!-- blog sidebar -->';
			dynamic_sidebar( '_ilaw_sm_blog_sidebar' );
		endif;

//check for page/post type global sidebars + default fallback
	else:
		//global widget areas
			$available_sidebars = get_field('sm_sidebars','option');

			//to check if there was a sidebar for the wp post from an ancestor
			$no_sidebar_yet = true;

			//loop through ancestral widgeys
			if($available_sidebars):

				foreach( $available_sidebars as $row ):
					$sidebar_is_ok = array(
						'page' => false,
						'cpt' => false
					);

					//if no chosen one yet
					if(
						(
							$no_sidebar_yet
							&& !get_field('sm_output_all','option')
						) xor (
							get_field('sm_output_all','option')
						)
					):
						$template_sidebar_id = _ilaw_sm_slug_text($row['name']);

						//check if ok for pages
							if(($row['pages'])): 

								foreach($row['pages'] as $sub_row):
									if(
										$sub_row['page']
										&& _ilaw_sm_is_descendant_of($sub_row['page'])
										&& !$sidebar_is_ok['page']
									){
										$sidebar_is_ok['page'] = true;
										if(!get_field('sm_output_all','option')) break;
									}
								endforeach;

							else:
								$row['pages'] = array();
							endif;

						//check if ok for post types
							if(($row['cpt'])): 
								
								foreach($row['cpt'] as $sub_row):
									if(
										(
											is_singular($sub_row)
											|| is_post_type_archive($sub_row)
										)
										&& !$sidebar_is_ok['cpt']
									){
										$sidebar_is_ok['cpt'] = true;
										if(!get_field('sm_output_all','option')) break;
									}
								endforeach;

							else:
								$row['cpt'] = array();
							endif;

						//render it after we made sure it ok to render
							if(
								(
									$sidebar_is_ok['page']
									&& is_page()
								)
								|| (
									$sidebar_is_ok['cpt']
									&& in_array(get_post_type(),$row['cpt'])
								)
							):
								echo '<!-- ancestor default: '.$template_sidebar_id.' -->';
								dynamic_sidebar( $template_sidebar_id );
								$no_sidebar_yet = false;
								if(!get_field('sm_output_all','option')) break;
							endif;

					endif;

				endforeach;

			endif;
		
		// check if ok to fallback
			if($no_sidebar_yet || !$available_sidebars){
				if( is_active_sidebar( '_ilaw_sm_default_sidebar' ) ){
					echo '<!-- fallback: default sidebar -->';
					dynamic_sidebar( '_ilaw_sm_default_sidebar' );
				}
			}

	endif;
