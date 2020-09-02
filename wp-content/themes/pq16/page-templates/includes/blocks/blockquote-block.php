<?php
/**
 * Block Name: iLawyer Blockquote
 *
 * This is the template that displays the ilawyer blockquote block.
 */

 $blockquote_block = get_field('blockquote_block') ?: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit';

 $namesource_block = get_field('namesource_block') ?: 'Source: Lorem ipsum dolor sit amet';

?>


<div class='blockquote_block'>
					
  <span class='blockquote_descrip'><?php echo $blockquote_block;?></span><!-- blockquote_descrip -->

  <span class='blockquote_source'><?php echo $namesource_block;?></span><!-- blockquote_source -->
					
</div><!-- blockquote_module -->