<?php if(!get_field('disable_banner_blog_redo','option')) { ?>
	
	<div id='internal_banner'>
	
		<div id='internal_banner_content'>

      <?php // blog main page conditionals
      
      if(is_home() || is_single()) { ?>

      <?php if(get_field('internal_banner_blog_title','option')) : ?>

        <?php if(get_field('banner_h1_blog','option') == "Yes") : ?>
        
          <h1 class="internal_title banner_title"><?php the_field( 'internal_banner_blog_title','option' ); ?></h1><!-- banner_title -->
        
          <?php else:?>
        
          <span class="internal_title banner_title"><?php the_field( 'internal_banner_blog_title','option' ); ?></span><!-- banner_title -->
        
        <?php endif;?>
        
      <?php else:?>
        
        <?php if(get_field('banner_h1_blog','option') == "Yes") : ?>
        
          <h1 class="internal_title banner_title"><?php the_field( 'global_internal_banner_title','option'); ?></h1><!-- banner_title -->
        
          <?php else:?>
        
          <span class="internal_title banner_title"><?php the_field( 'global_internal_banner_title','option' ); ?></span><!-- banner_title -->
        
          <?php endif;?>
        
        <?php endif;?>

      <?php } ?>
      
      <?php // categories conditionals
      
        if(is_category()) { ?>

        <?php if(get_field('banner_h1_blog','option') == "Yes") : ?>

          <h1 class="internal_title banner_title"><?php single_cat_title(); ?></h1><!-- banner_title -->

          <?php else:?>

          <span class="internal_title banner_title"><?php single_cat_title(); ?></span><!-- banner_title -->

        <?php endif;?>

      <?php } ?>

      <?php if(is_archive() && !is_category()) { ?>

        <?php if(get_field('banner_h1_blog','option') == "Yes") : ?>

          <h1 class="internal_title banner_title"><?php printf( __( '<span>%s</span>'), get_the_date( _x( 'Y', 'yearly archives date format' ) ) ); ?></h1><!-- banner_title -->

          <?php else:?>

          <span class="internal_title banner_title"><?php printf( __( '<span>%s</span>'), get_the_date( _x( 'Y', 'yearly archives date format') ) ); ?></span><!-- banner_title -->

        <?php endif;?>

      <?php } ?>

      <?php if(get_field('turn_off_button_blog','option') == "Yes") : ?>

        <?php else: ?>

          <a class="button free_consult_button internal_banner_button" href="#consultation">

            <span><?php the_field( 'global_internal_banner_button_verbiage','option'); ?></span>

        </a>

      <?php endif;?>

		</div><!-- internal_banner_content -->

		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		<?php $banner_image = get_field( 'internal_banner_blog_image', 'option'); ?>
		
		
		<?php if($banner_image) : ?>

			<img id="banner_hero" src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>"/><!-- internal_hero -->

			<?php else: ?>

			<img id='banner_hero' src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>"/><!-- internal_hero -->

		<?php endif;?>
		
	</div><!-- internal_banner -->

	<?php } ?>





