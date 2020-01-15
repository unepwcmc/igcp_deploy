<?php
  /*
    Two Images Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */
  $image_1 = block_field( 'image-1', false );
  $image_1_url = wp_get_attachment_image_src( $image_1, 'full-size' )[0];
  $image_1_alt = get_post_meta($image_1, '_wp_attachment_image_alt', TRUE);
  $caption_1 = block_field( 'caption-1', false );

  $image_2 = block_field( 'image-2', false );
  $image_2_url = wp_get_attachment_image_src( $image_2, 'full-size' )[0];
  $image_2_alt = get_post_meta($image_2, '_wp_attachment_image_alt', TRUE);
  $caption_2 = block_field( 'caption-2', false );
?>

<div class="blk-TwoImages">
  <div class="blk-TwoImages_Items">
    <div class="blk-TwoImages_Item">
      <figure class="blk-TwoImages_Figure">
        <div class="blk-TwoImages_ImageWrap">
          <img src="<?php echo $image_1_url; ?>" alt="<?php echo $image_1_alt; ?>" class="blk-TwoImages_Image">
        </div>
        <figcaption class="blk-TwoImages_Caption"><?php echo $caption_1; ?></figcaption>
      </figure>
    </div>
    <div class="blk-TwoImages_Item">
      <figure class="blk-TwoImages_Figure">
        <div class="blk-TwoImages_ImageWrap">
          <img src="<?php echo $image_2_url; ?>" alt="<?php echo $image_2_alt; ?>" class="blk-TwoImages_Image">
        </div>
        <figcaption class="blk-TwoImages_Caption"><?php echo $caption_2; ?></figcaption>
      </figure>
    </div>
  </div>
</div>
