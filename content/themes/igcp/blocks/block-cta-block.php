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
  $link_url_1_external = get_theme_mod( 'cta_block_button_1_link_external' );
  $link_text_1 = get_theme_mod( 'cta_block_button_1_text' );
  $link_url_2 = get_theme_mod( 'cta_block_button_2_link' );
  $link_url_2_external = get_theme_mod( 'cta_block_button_2_link_external' );
  $link_text_2 = get_theme_mod( 'cta_block_button_2_text' );
  $background_image_url = get_theme_mod( 'cta_block_background_image' );
  $opacity = get_theme_mod( 'cta_block_overlay_opacity' );
?>

<div class="cta-Block">
  <div class="cta-Block_Inner">
    <div class="cta-Block_Body">
      <div class="cta-Block_Content">
        <h3 class="cta-Block_Title"><?php echo $title; ?></h3>
        <p class="cta-Block_Text"><?php echo $text; ?></p>
        <ul class="cta-Block_Items">
          <li class="cta-Block_Item">
            <a href="<?php echo $link_url_1; ?>" class="cta-Block_Link<?php if ($link_url_1_external) echo ' cta-Block_Link-external'; ?>" <?php if ($link_url_1_external) echo 'target="_blank"'; ?>><?php echo $link_text_1; ?></a>
          </li>
          <li class="cta-Block_Item">
            <a href="<?php echo $link_url_2; ?>" class="cta-Block_Link cta-Block_Link-accent<?php if ($link_url_2_external) echo ' cta-Block_Link-external'; ?>" <?php if ($link_url_2_external) echo 'target="_blank"'; ?>><?php echo $link_text_2; ?><?php if ($link_url_2_external) get_template_part( 'template-parts/icons/icon', 'external' ); ?></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <img src="<?php echo $background_image_url; ?>" alt="<?php echo $title; ?>" class="cta-Block_BackgroundImage">
  <div class="cta-Block_Overlay" style="opacity: <?php echo $opacity; ?>"></div>
</div>
<div class="cta-Block_ImageStrip" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/inc/img/pattern-bar-colourful.png');"></div>
