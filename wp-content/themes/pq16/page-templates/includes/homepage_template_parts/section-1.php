<section id='section_one'>

 <div id='sec_one_inner'>
 
   <div id='sec_one_top'>

    <div id='sec_one_video_wrapper'>
    
      <div id='sec_one_video'>

        <?php if(get_field('wistia_or_youtube_section_one') == "Youtube") { ?>

          <a href="https://www.youtube.com/embed/<?php the_field( 'youtube_id_section_one' ); ?>" data-lity>

        <?php } ?>

        <?php if(get_field('wistia_or_youtube_section_one') == "Wistia") { ?>

          <div class='mywistia wistia_embed wistia_async_<?php the_field( 'wistia_id_section_one' ); ?> popover=true popoverContent=html'></div><!-- mywistia -->

        <?php } ?>

        <div id='sec_one_img_wrapper'>

        <picture>
        
          <?php $section_one_video_background_webp = get_field( 'section_one_video_background_webp' ); ?>
        
          <?php if ( $section_one_video_background_webp ) { ?>

            <source srcset='<?php echo $section_one_video_background_webp['url']; ?>' type='image/webp'>
        
          <?php } ?>
        
          <?php $section_one_video_background = get_field( 'section_one_video_background' ); ?>
      
          <img src="<?php echo $section_one_video_background['url']; ?>" alt="<?php echo $section_one_video_background['alt']; ?>" />
    
        </picture>
        
        </div><!-- sec_one_img_wrapper -->
     
        <div class='video_overlay'>
       
          <?php echo file_get_contents( get_template_directory() . '/images/btn-play.svg' ); ?>
       
        </div><!-- video_overlay -->

        <?php if(get_field('wistia_or_youtube_section_one') == "Youtube") { ?>

          </a>
  
        <?php } ?>
     
      </div><!-- sec_one_video -->

     <div id='sec_one_video_content'>
     
       <span><?php the_field( 'section_one_video_caption' ); ?></span>
     
     </div><!-- sec_one_video_content -->

     </div><!-- sec_video_wrapper -->

     <span id='sec_one_title'><?php the_field( 'section_one_title' ); ?></span><!-- sec_one_title -->
   
   </div><!-- sec_one_top -->

   <div id='sec_one_bottom'>

    <div id='sec_one_form'>
    
      <span id='sec_one_form_title'><?php the_field( 'section_one_form_title' ); ?></span><!-- sec_one_form_title -->

      <?php gravity_form(6, false, false, false, '', true, 1245); ?>
    
      <span id='sec_one_required'>all fields required *</span><!-- sec_one_required -->
      
    </div><!-- sec_one_form -->
   
  </div><!-- sec_one_bottom -->

</div><!-- sec_one_inner -->

 <a id='free_consult_button' href='#consultation'>Free Consultation</a><!-- free_consult_button -->

 <div id='sec_one_image_wrapper'>
 
  <picture>

    <?php $section_one_background_desktop_webp = get_field( 'section_one_background_desktop_webp' ); ?>
    
    <?php if ( $section_one_background_desktop_webp ) { ?>
	    
      <source media='(min-width: 1170px)' srcset='<?php echo $section_one_background_desktop_webp['url']; ?>' type='image/webp'>
    
    <?php } ?>

    <?php $section_one_background_desktop = get_field( 'section_one_background_desktop' ); ?>

    <?php if ( $section_one_background_desktop ) { ?>

      <source media='(min-width: 1170px)' srcset='<?php echo $section_one_background_desktop['url']; ?>'>
    
    <?php } ?>
    
    <?php $section_one_background_tablet_webp = get_field( 'section_one_background_tablet_webp' ); ?>
    
    <?php if ( $section_one_background_tablet_webp ) { ?>
      
      <source media='(min-width: 768px)' srcset='<?php echo $section_one_background_tablet_webp['url']; ?>' type='image/webp'>
    
    <?php } ?>

    <?php $section_one_background_tablet = get_field( 'section_one_background_tablet' ); ?>
    
    <?php if ( $section_one_background_tablet ) { ?>

      <source media='(min-width: 768px)' srcset='<?php echo $section_one_background_tablet['url']; ?>'>
    
    <?php } ?>

    <?php $section_one_background_mobile_webp = get_field( 'section_one_background_mobile_webp' ); ?>
    
    <?php if ( $section_one_background_mobile_webp ) { ?>
      
      <source media='(min-width: 550px)' srcset='<?php echo $section_one_background_mobile_webp['url']; ?>' type='image/webp'>
	  
    <?php } ?>
    
    <?php $section_one_background_mobile = get_field( 'section_one_background_mobile' ); ?>

    <?php if ( $section_one_background_mobile ) { ?>

      <source media='(min-width: 550px)' srcset='<?php echo $section_one_background_mobile['url']; ?>'>
    
    <?php } ?>

    <?php $section_one_background_small_mobile_webp = get_field( 'section_one_background_small_mobile' ); ?>
    
    <?php if ( $section_one_background_small_mobile_webp ) { ?>

      <source srcset='<?php echo $section_one_background_small_mobile_webp['url']; ?>' type='image/webp'>
    
    <?php } ?>

    <?php $section_one_background_small_mobile = get_field( 'section_one_background_small_mobile' ); ?>

	  <img id="hero" src="<?php echo $section_one_background_small_mobile['url']; ?>" alt="<?php echo $section_one_background_small_mobile['alt']; ?>" />

  </picture>
 
 </div><!-- sec_one_image_wrapper -->
 
 </section><!-- section_one -->