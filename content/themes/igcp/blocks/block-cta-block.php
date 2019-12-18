<?php
  /*
    CTA Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  // Variables

  $title = block_field( 'title', false );
  $text = block_field( 'text', false );
  $link_url_1 = block_field( 'link-url-1', false );
  $link_text_1 = block_field( 'link-text-1', false );
  $link_url_2 = block_field( 'link-url-2', false );
  $link_text_2 = block_field( 'link-text-2', false );
  $background_image = block_field( 'background-image', false );
  $background_image_url = wp_get_attachment_image_src( $background_image, 'full-size' )[0];
  $opacity = block_field( 'opacity', false );
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
