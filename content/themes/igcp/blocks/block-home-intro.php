<?php
  /*
    Homepage Intro Block
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

  $flipped = block_field( 'flipped', false);
?>

<div class="blk-HomeIntro">
  <div class="blk-HomeIntro_Body">
    <div class="blk-HomeIntro_Columns<?php if($flipped) echo ' blk-HomeIntro_Columns-flipped' ?>">
      <div class="blk-HomeIntro_Column">
        <div class="blk-HomeIntro_Content">
          <p class="blk-HomeIntro_LeadText"><?php echo $lead_text; ?></p>
          <p class="blk-HomeIntro_Text"><?php echo $text; ?></p>
          <a class="blk-HomeIntro_Link" href="<?php echo $link_url; ?>" title="<?php echo $link_text; ?>"><?php echo $link_text; ?></a>
        </div>
      </div>
      <div class="blk-HomeIntro_Column">
        <div class="blk-HomeIntro_ImageWrap blk-HomeIntro_ImageWrap-primary">
          <img class="blk-HomeIntro_Image" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
        </div>
        <div class="blk-HomeIntro_ImageWrap blk-HomeIntro_ImageWrap-secondary">
          <img class="blk-HomeIntro_Image" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/pattern-bg-bright.png'; ?>" alt="Background pattern">
        </div>
      </div>
    </div>
  </div>
</div>
