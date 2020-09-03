<section id='section_one'>

 <div id='sec_one_inner'>
 
   <div id='sec_one_top'>
   
     <div id='sec_one_video'>
     
       <img src='<?php bloginfo('template_directory');?>/images/video.png' alt=''/>

       <div class='video_overlay'>
       
         <?php echo file_get_contents( get_template_directory() . '/images/btn-play.svg' ); ?>
       
       </div><!-- video_overlay -->
     
     </div><!-- sec_one_video -->

     <span id='sec_one_title'>Representing New Mexicans who have been injured.</span><!-- sec_one_title -->
   
   </div><!-- sec_one_top -->

   <a id='free_consult_button' href='#consultation'>Free Consultation</a><!-- free_consult_button -->
 
 </div><!-- sec_one_inner -->

 <picture>
 
  <!-- <source media='(min-width: 1170px)' data-srcset='<?php echo $section_one_image_laptop_webp['url']; ?>' type='image/webp'> -->
 
  <!-- <source media='(min-width: 1380px)' data-srcset='<?php bloginfo('template_directory'); ?>/images'> -->
 
  <img id="hero" src='<?php bloginfo('template_directory'); ?>/images/hero-mobile.jpg' alt='' />
 
 </picture>


</section><!-- section_one -->