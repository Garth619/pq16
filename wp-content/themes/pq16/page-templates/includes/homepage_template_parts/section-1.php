<section id='section_one'>

 <div id='sec_one_inner'>
 
   <div id='sec_one_top'>

    <div id='sec_one_video_wrapper'>
    
      <div id='sec_one_video'>
     
       <img src='<?php bloginfo('template_directory');?>/images/video.png' alt=''/>

       <div class='video_overlay'>
       
         <?php echo file_get_contents( get_template_directory() . '/images/btn-play.svg' ); ?>
       
       </div><!-- video_overlay -->
     
     </div><!-- sec_one_video -->

     <div id='sec_one_video_content'>
     
       <span>Learn why we’re considered the top law firm in New Mexico</span>
     
     </div><!-- sec_one_video_content -->

     </div><!-- sec_video_wrapper -->

     <span id='sec_one_title'>Representing<br/> New Mexicans who have been injured.</span><!-- sec_one_title -->
   
   </div><!-- sec_one_top -->

   <div id='sec_one_bottom'>

    <div id='sec_one_form'>
    
      <span id='sec_one_form_title'>Free Consultation</span><!-- sec_one_form_title -->

      <?php gravity_form(6, false, false, false, '', true, 1245); ?>
    
      <span id='sec_one_required'>all fields required *</span><!-- sec_one_required -->
      
    </div><!-- sec_one_form -->
   
  </div><!-- sec_one_bottom -->

</div><!-- sec_one_inner -->

 <a id='free_consult_button' href='#consultation'>Free Consultation</a><!-- free_consult_button -->

 <picture>
 
  <!-- <source media='(min-width: 1170px)' data-srcset='<?php echo $section_one_image_laptop_webp['url']; ?>' type='image/webp'> -->

  <source media='(min-width: 1170px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero.jpg'>
 
  <source media='(min-width: 768px)' srcset='<?php bloginfo('template_directory'); ?>/images/hero-tablet.jpg'>
 
  <img id="hero" src='<?php bloginfo('template_directory'); ?>/images/hero-mobile.jpg' alt='' />
 
 </picture>


</section><!-- section_one -->