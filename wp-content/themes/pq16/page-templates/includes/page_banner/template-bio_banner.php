<?php if(!get_field('disable_banner_new')) { ?>
	
	<div id='internal_banner'>
	
		<div id='internal_banner_content'>
    
      <div id='att_banner_left'></div><!-- att_banner_left -->

    	<div id='att_banner_right'>
		
				<div id='att_banner_header_wrapper'>

					<h1 class="internal_title banner_title"><?php the_title();?></h1><!-- banner_title -->

					<span id='bio_position'><?php the_field( 'position' ); ?></span><!-- bio_position -->

				</div><!-- att_banner_header_wrapper -->
		
			</div><!-- att_banner_right -->
		
		</div><!-- internal_banner_content -->

		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $attorney_banner_image = get_field( 'attorney_banner_image' ); ?>

    <?php if ( $attorney_banner_image ) : ?>
	  
      <img id="banner_hero" src="<?php echo $attorney_banner_image['url']; ?>" alt="<?php echo $attorney_banner_image['alt']; ?>" />
    
		<?php else:?>

			<img id='banner_hero' src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->

		<?php endif;?>
		
	</div><!-- internal_banner -->

	<?php } ?>



