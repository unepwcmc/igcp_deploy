<?php
  /*
    Stats Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */
  $image_1 = block_field( 'image-1', false );
  $image_1_src = wp_get_attachment_image_src( $image_1, 'full-size' )[0];
  $heading_1 = block_field( 'heading-1', false );
  $text_1 = block_field( 'text-1', false );

  $image_2 = block_field( 'image-2', false );
  $image_2_src = wp_get_attachment_image_src( $image_2, 'full-size' )[0];
  $heading_2 = block_field( 'heading-2', false );
  $text_2 = block_field( 'text-2', false );

  $image_3 = block_field( 'image-3', false );
  $image_3_src = wp_get_attachment_image_src( $image_3, 'full-size' )[0];
  $heading_3 = block_field( 'heading-3', false );
  $text_3 = block_field( 'text-3', false );
?>

<div class="blk-Stats">
  <div class="blk-Stats_Columns">

    <?php if ($heading_1 != '' || $text_1 != ''): ?>
      <div class="blk-Stats_Column">
        <div class="blk-Stats_ImageWrap">
          <img class="blk-Stats_Image" src="<?php echo $image_1_src; ?>" alt="<?php echo $heading_1; ?>">
        </div>
        <div class="blk-Stats_Content">
          <h3 class="blk-Stats_Heading"><?php echo $heading_1; ?></h3>
          <p class="blk-Stats_Text"><?php echo $text_1; ?></p>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($heading_2 != '' || $text_2 != ''): ?>
      <div class="blk-Stats_Column">
        <div class="blk-Stats_ImageWrap">
          <img class="blk-Stats_Image" src="<?php echo $image_2_src; ?>" alt="<?php echo $heading_2; ?>">
        </div>
        <div class="blk-Stats_Content">
          <h3 class="blk-Stats_Heading"><?php echo $heading_2; ?></h3>
          <p class="blk-Stats_Text"><?php echo $text_2; ?></p>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($heading_3 != '' || $text_3 != ''): ?>
      <div class="blk-Stats_Column">
        <div class="blk-Stats_ImageWrap">
          <img class="blk-Stats_Image" src="<?php echo $image_3_src; ?>" alt="<?php echo $heading_3; ?>">
        </div>
        <div class="blk-Stats_Content">
          <h3 class="blk-Stats_Heading"><?php echo $heading_3; ?></h3>
          <p class="blk-Stats_Text"><?php echo $text_3; ?></p>
        </div>
      </div>
    <?php endif; ?>

  </div>
</div>
