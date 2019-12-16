<?php
  /*
    Hero Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  // Variables

  $title = block_field( 'title', false );
  $text = block_field( 'text', false );
  $link_url = block_field( 'link-url', false );
  $link_text = block_field( 'link-text', false );
  $background_image = block_field( 'background-image', false );
  $background_image_url = wp_get_attachment_image_src( $background_image, 'full-size' )[0];
  $opacity = block_field( 'opacity', false );
?>

<div class="her-Hero">
  <div class="her-Hero_Inner">
    <div class="her-Hero_Body">
      <div class="her-Hero_Content">
        <h2 class="her-Hero_Title"><?php echo $title; ?></h2>
        <div class="her-Hero_Text">
          <?php echo $text; ?>
        </div>
        <a href="<?php echo $link_url; ?>" class="her-Hero_Link"><?php echo $link_text; ?></a>
      </div>
    </div>
  </div>
  <img src="<?php echo $background_image_url; ?>" alt="<?php echo $title; ?>" class="her-Hero_BackgroundImage">
  <div class="her-Hero_Overlay" style="opacity: <?php echo $opacity; ?>"></div>
</div>
