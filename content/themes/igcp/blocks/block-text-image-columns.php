<?php
  /*
    Text Image Columns Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */
  $image = block_field( 'image', false );
  $image_url = wp_get_attachment_image_src( $image, 'full-size' )[0];
  $image_alt = get_post_meta($image, '_wp_attachment_image_alt', TRUE);

  $flipped = block_field( 'flipped', false);
?>

<div class="blk-TextImage">
  <div class="blk-TextImage_Body">
    <div class="blk-TextImage_Columns<?php if($flipped) echo ' blk-TextImage_Columns-flipped' ?>">
      <div class="blk-TextImage_Column">
        <div class="blk-TextImage_Content">
          <?php if ( block_rows( 'content' ) ) : while ( block_rows( 'content' ) ) : block_row( 'content' );?>

            <?php if ( block_sub_value( 'heading' ) ) : ?>
              <h4 class="blk-TextImage_Heading"><?php echo block_sub_value( 'heading' ); ?></h4>
            <?php endif;?>

            <?php if ( block_sub_value( 'text' ) ) : ?>
              <div class="blk-TextImage_Text"><?php echo block_sub_value( 'text' ); ?></div>
            <?php endif;?>

          <?php endwhile;
            endif; reset_block_rows( 'content' ); ?>
        </div>
      </div>
      <div class="blk-TextImage_Column">
        <div class="blk-TextImage_ImageWrap blk-TextImage_ImageWrap-primary">
          <img class="blk-TextImage_Image" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
        </div>
        <div class="blk-TextImage_ImageWrap blk-TextImage_ImageWrap-secondary">
          <img class="blk-TextImage_Image" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/pattern-bg-bright.png'; ?>" alt="Background pattern">
        </div>
      </div>
    </div>
  </div>
</div>
