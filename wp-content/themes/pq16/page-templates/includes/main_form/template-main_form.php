<div id='form_wrapper'>

  <span id='form_title'><?php the_field( 'form_title','option'); ?></span><!-- form_title -->

  <div id='form_descrip'>
    
    <p><?php the_field( 'form_subtitle','option'); ?></p>

  </div><!-- form_descrip -->

  <div id='gform_outer'>
  
    <?php gravity_form(3, false, false, false, '', true, 1245); ?>

    <span id='required'><?php the_field( 'required_field_verbiage','option'); ?></span><!-- required -->

  </div><!-- gform_outer -->

</div><!-- form_wrapper -->