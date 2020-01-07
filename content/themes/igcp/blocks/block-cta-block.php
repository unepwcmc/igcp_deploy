<?php
  /*
    CTA Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  // Variables

  $title = get_theme_mod( 'cta_block_title' );
  $text = get_theme_mod( 'cta_block_text' );
  $link_url_1 = get_theme_mod( 'cta_block_button_1_link' );
  $link_text_1 = get_theme_mod( 'cta_block_button_1_text' );
  $link_url_2 = get_theme_mod( 'cta_block_button_2_link' );
  $link_text_2 = get_theme_mod( 'cta_block_button_2_text' );
  // $background_image_url = wp_get_attachment_image_src( $background_image, 'full-size' )[0];
  $background_image_url = get_theme_mod( 'cta_block_background_image' );
  $opacity = get_theme_mod( 'cta_block_overlay_opacity' );
?>

<div class="blk-CTA">
  <div class="blk-CTA_Inner">
    <div class="blk-CTA_Body">
      <div class="blk-CTA_Content">
        <h3 class="blk-CTA_Title"><?php echo $title; ?></h3>
        <p class="blk-CTA_Text"><?php echo $text; ?></p>
        <ul class="blk-CTA_Items">
          <li class="blk-CTA_Item">
            <a href="<?php echo $link_url_1; ?>" class="blk-CTA_Link"><?php echo $link_text_1; ?></a>
          </li>
          <li class="blk-CTA_Item">
            <a href="<?php echo $link_url_2; ?>" class="blk-CTA_Link blk-CTA_Link-accent"><?php echo $link_text_2; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <img src="<?php echo $background_image_url; ?>" alt="<?php echo $title; ?>" class="blk-CTA_BackgroundImage">
  <div class="blk-CTA_Overlay" style="opacity: <?php echo $opacity; ?>"></div>
</div>
<div class="blk-CTA_ImageStrip" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/inc/img/pattern-bar-colourful.png');"></div>
