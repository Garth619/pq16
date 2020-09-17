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
     
        <?php $section_one_video_background = get_field( 'section_one_video_background' ); ?>
      
        <?php if ( $section_one_video_background ) { ?>
	      
          <img src="<?php echo $section_one_video_background['url']; ?>" alt="<?php echo $section_one_video_background['alt']; ?>" />
      
        <?php } ?>

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

 <picture>

  <source media='(min-width: 1170px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero.jpg'>
 
  <source media='(min-width: 768px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-tablet.jpg'>
 
  <img id="hero" src='<?php bloginfo('template_directory'); ?>/images/hero-mobile.jpg' alt='' />
 
 </picture>


</section><!-- section_one -->