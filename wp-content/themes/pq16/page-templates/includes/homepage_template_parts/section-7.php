<section id='section_seven'>

<div id='sec_seven_inner'>

  <div id='sec_seven_top'>

  <?php if(get_field('wistia_or_youtube_sec_seven') == "Youtube" ) { ?>

<div id="section_seven_video" class="video_module">

  <a href="https://www.youtube.com/embed/<?php the_field( 'youtube_id_sec_seven' ); ?>" data-lity>

    <div class='single_video_thumbnail'>
    
    <div class='video_overlay'>

      <span class='play_button'></span><!-- play_button -->

    </div><!-- video_overlay -->

    <?php if(get_field('section_seven_video_thumbnail_select') == "Leave Blank" ) { ?>

      <img id="youtube_img" src="https://img.youtube.com/vi/<?php the_field( 'youtube_id_sec_seven' ); ?>/0.jpg"/>

    <?php } ?>

    <?php if(get_field('section_seven_video_thumbnail_select') == "Add Thumbnail Image" ) { ?>

      <?php $video_thumbnail_video_center = get_field( 'section_seven_video_thumbnail' ); ?>

      <img class="lazyload" data-src="<?php echo $video_thumbnail_video_center['url']; ?>" alt="<?php echo $video_thumbnail_video_center['alt']; ?>" />

    <?php } ?>

    

    </div><!-- single_video_thumbnail -->

    <span class='video_title'><?php the_field( 'video_title_video_center' ); ?></span><!-- video_title -->

  </a>

</div><!-- single_video -->

<?php } ?>

<?php if(get_field('wistia_or_youtube_sec_seven') == "Wistia" ) { ?>

  <div id="section_seven_video" class="video_module">

    <div class='single_video_thumbnail'>

      <?php if(get_field('section_seven_video_thumbnail_select') == "Add Thumbnail Image" ) { ?>

        <div class='mywistia wistia_embed wistia_async_<?php the_field( 'wistia_id_sec_seven' ); ?> popover=true popoverContent=html'></div><!-- mywistia -->

      <?php } ?>

      <?php if(get_field('section_seven_video_thumbnail_select') == "Leave Blank" ) { ?>

        <div class="mywistia_thumbnail">

          <div class='mywistia wistia_embed wistia_async_<?php the_field( 'wistia_id_sec_seven' ); ?> popover=true popoverContent=thumbnail'></div><!-- mywistia -->

        </div><!-- mywistia_thumbnail -->

        <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>

      <?php } ?>

      <div class='video_overlay'>

        <span class='play_button'></span><!-- play_button -->

      </div><!-- video_overlay -->

    <?php if(get_field('section_seven_video_thumbnail_select') == "Add Thumbnail Image" ) { ?>

      <?php $video_thumbnail_video_center = get_field( 'section_seven_video_thumbnail' ); ?>

        <img class="lazyload" data-src="<?php echo $video_thumbnail_video_center['url']; ?>" alt="<?php echo $video_thumbnail_video_center['alt']; ?>" />

      <?php } ?>

      </div><!-- single_video_thumbnail -->

  </div><!-- single_video -->


<?php }?>
  
  </div><!-- sec_seven_top -->

  <div id='sec_seven_bottom'>

    <div id='sec_seven_bottom_inner'>
    
      <span id='sec_seven_title'><?php the_field( 'section_seven_title' ); ?></span><!-- sec_seven_title -->
  
      <div id='sec_seven_content'>
      
        <?php the_field( 'section_seven_content' ); ?>
      
      </div><!-- sec_seven_content -->

      <?php if(get_field('section_seven_button_verbiage') && get_field('section_seven_button_page_link')) { ?>
  
        <a id='sec_seven_learn_more' class='button_five' href='<?php the_field( 'section_seven_button_page_link' ); ?>'><?php the_field( 'section_seven_button_verbiage' ); ?></a><!-- button_five -->

      <?php } ?>
  
      </div><!-- sec_seven_bottom_inner -->

    <div id='sec_seven_logo'>
    
    <?php $section_seven_logo = get_field( 'section_seven_logo' ); ?>
    
    <?php if ( $section_seven_logo ) { ?>
	    
      <img class="lazyload" data-src="<?php echo $section_seven_logo['url']; ?>" alt="<?php echo $section_seven_logo['alt']; ?>" />
    
    <?php } ?>
    
    </div><!-- sec_seven_logo -->
  
  </div><!-- sec_seven_bottom -->

</div><!-- sec_seven_inner -->

</section><!-- section_seven -->