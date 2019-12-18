<?php
  /*
    Text Image Columns Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */
  $lead_text = block_field( 'lead-text', false );
  $text = block_field( 'text', false );
  $link_url = block_field( 'link-url', false );
  $link_text = block_field( 'link-text', false );
  $image = block_field( 'image', false );
  $image_url = wp_get_attachment_image_src( $image, 'full-size' )[0];
  $image_alt = get_post_meta($image, '_wp_attachment_image_alt', TRUE);

  $show_social = block_field( 'show-social', false);

  $flipped = block_field( 'flipped', false);
?>

<div class="blk-TextImage">
  <div class="blk-TextImage_Body">
    <div class="blk-TextImage_Columns<?php if($flipped) echo ' blk-TextImage_Columns-flipped' ?>">
      <div class="blk-TextImage_Column">
        <div class="blk-TextImage_Content">
          <p class="blk-TextImage_LeadText"><?php echo $lead_text; ?></p>
          <p class="blk-TextImage_Text"><?php echo $text; ?></p>
          <a class="blk-TextImage_Link" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
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
  <?php if ($show_social): ?>
    <div class="blk-TextImage_Footer">
      <?php get_template_part( 'template-parts/social/social', 'share' ); ?>
    </div>
  <?php endif; ?>
</div>
