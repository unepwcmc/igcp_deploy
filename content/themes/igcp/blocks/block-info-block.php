<?php
  /*
    Map Info Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  // Variables

  $heading = block_field( 'heading', false );
  $text = block_field( 'text', false );
  // $link_url = block_field( 'link-url', false );
  $link_text = block_field( 'link-text', false );
  $image = block_field( 'image', false );
  $image_src = wp_get_attachment_image_src( $image, 'full-size' )[0];
?>


<div class="sec-Info">
  <div class="sec-Info_Columns">
    <div class="sec-Info_Column">
      <div class="sec-Info_ImageWrap">
        <img class="sec-Info_Image" src="<?php echo $image_src; ?>" alt="<?php echo $heading; ?>">
      </div>
    </div>
    <div class="sec-Info_Column">
      <div class="sec-Info_Content">
        <h4 class="sec-Info_Heading"><?php echo $heading; ?></h4>
        <p class="sec-Info_Text"><?php echo $text; ?></p>
        <a href="<?php echo get_permalink( block_value( 'link-url' )->ID ); ?>" class="sec-Info_Link" title="<?php echo $link_text; ?>"><?php echo $link_text; ?></a>
      </div>
      <div class="sec-Info_ImageStrip" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/inc/img/pattern-bar-grey.png');"></div>
    </div>
  </div>
</div>
