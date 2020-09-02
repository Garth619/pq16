<?php
/**
 * Block Name: iLawyer Video
 *
 * This is the template that displays the ilawyer video block.
 */

?>




        <div class="page_video_block video_block video_shadow <?php if(get_field('video_thumbnail_option') == "Leave Blank" && get_field('wistia_or_youtube_block') == "Wistia") { echo "wistia_no_thumbnail";}?>">

						<?php if(get_field('wistia_or_youtube_block') == "Youtube") { ?>

							<a href="https://www.youtube.com/embed/<?php the_field( 'youtube_id_block' ); ?>" data-lity>

						<?php } ?>

						<?php if(get_field('video_thumbnail_option') == "Leave Blank" && get_field('wistia_or_youtube_block') == "Wistia") { ?>
							
							

  							<div class="mywistia_thumbnail">
  
  							 <div class='mywistia wistia_embed wistia_async_<?php the_field( 'wistia_id_block' ); ?> popover=true popoverContent=thumbnail'></div><!-- mywistia -->
  
  							</div><!-- mywistia_thumbnail -->
  
  							<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

						<?php } ?>

						<?php if(get_field('video_thumbnail_option') == "Add Image" && get_field('wistia_or_youtube_block') == "Wistia") { ?>
							
							

							<div class='mywistia wistia_embed wistia_async_<?php the_field( 'wistia_id_block' ); ?> popover=true popoverContent=html'></div><!-- mywistia -->

						<?php } ?>
    
      			<div class='video_overlay'>
      
        			<span class='play_button'></span><!-- play_button -->
      
      			</div><!-- video_overlay -->

						<?php if(get_field('video_thumbnail_option') == "Leave Blank" && get_field('wistia_or_youtube_block') == "Youtube") { ?>

							<img src="https://img.youtube.com/vi/<?php the_field( 'youtube_id_block' ); ?>/0.jpg"/>

						<?php } ?>

						<?php if(get_field('video_thumbnail_option') == "Add Image") {?>

   						<picture>
   
   							<?php $video_thumbnail_block_webp = get_field( 'video_thumbnail_block_webp' ); ?>
   						
   							<?php if ( $video_thumbnail_block_webp ) { ?>
   						
   								<source srcset='<?php echo $video_thumbnail_block_webp['url']; ?>' type="image/webp">
   							
   							<?php } ?>
   
   							<?php $video_thumbnail_block = get_field( 'video_thumbnail_block' ); ?>
     
           			<img src="<?php echo $video_thumbnail_block['url']; ?>" alt="<?php echo $video_thumbnail_block['alt']; ?>" />
   
   						</picture>
						
						<?php } ?>
						<?php if(get_field('wistia_or_youtube_block') == "Youtube") { ?>
						</a>
					<?php } ?>

				</div><!-- page_video_block -->

         

        