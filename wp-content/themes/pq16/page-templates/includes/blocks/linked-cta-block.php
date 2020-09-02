<?php
/**
 * Block Name: iLawyer Linked Call to Action
 *
 * This is the template that displays the ilawyer linked call to action block.
 */ 

 $linked_call_to_action_title = get_field('linked_call_to_action_title') ?: 'Lorem<br/> Ipsum Dolor<br/> Sit';

?>

<div class='linked_cta_block'>

		<?php if(get_field('call_to_action_link_block')) : ?>

			<a href="<?php the_field('call_to_action_link_block');?>">

		<?php else:?>

			<a>

		<?php endif;?>
					
    <div class='linked_cta_block_left'>
  						
  	  <span class='linked_cta_title'><?php echo $linked_call_to_action_title;?></span><!-- linked_cta_title -->

		</div><!-- linked_cta_block_left -->
  
  	<div class='linked_cta_block_right'>

			<?php $linked_call_to_action_image = get_field( 'linked_call_to_action_image' ); ?>

			<?php if ( $linked_call_to_action_image ) : ?>
		
				<img src="<?php echo $linked_call_to_action_image['url']; ?>" alt="<?php echo $linked_call_to_action_image['alt']; ?>" />

			<?php else: ?>

				<img src='<?php bloginfo('template_directory');?>/images/top-ten.jpg' alt=''/>
			
			<?php endif; ?>
  						
  	</div><!-- linked_cta_block_right -->

	</a>
					
</div><!-- linked_cta_block -->