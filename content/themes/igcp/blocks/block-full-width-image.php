<?php
  /*
    Full Width Image Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */
  $image = block_field( 'image', false );
  $image_url = wp_get_attachment_image_src( $image, 'full-size' )[0];
  $image_alt = get_post_meta($image, '_wp_attachment_image_alt', TRUE);
?>

<div class="blk-FullWidthImage">
  <div class="blk-FullWidthImage_ImageWrap">
    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="blk-FullWidthImage_Image">
  </div>
</div>
