<?php
  /*
    Top Level Landing Page Intro Block
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

<div class="tlv-Intro">
  <div class="tlv-Intro_Body">
    <div class="tlv-Intro_Columns<?php if($flipped) echo ' tlv-Intro_Columns-flipped' ?>">
      <div class="tlv-Intro_Column">
        <div class="tlv-Intro_Content">
          <p class="tlv-Intro_LeadText"><?php echo $lead_text; ?></p>
          <p class="tlv-Intro_Text"><?php echo $text; ?></p>
          <a class="tlv-Intro_Link" href="<?php echo $link_url; ?>"><?php echo $link_text; ?></a>
        </div>
      </div>
      <div class="tlv-Intro_Column">
        <div class="tlv-Intro_ImageWrap tlv-Intro_ImageWrap-primary">
          <img class="tlv-Intro_Image" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
        </div>
        <div class="tlv-Intro_ImageWrap tlv-Intro_ImageWrap-secondary">
          <img class="tlv-Intro_Image" src="<?php echo get_stylesheet_directory_uri() . '/inc/img/pattern-bg-bright.png'; ?>" alt="Background pattern">
        </div>
      </div>
    </div>
  </div>
  <?php if ($show_social): ?>
    <div class="tlv-Intro_Footer">
      <?php get_template_part( 'template-parts/social/social', 'share' ); ?>
    </div>
  <?php endif; ?> 
</div>
