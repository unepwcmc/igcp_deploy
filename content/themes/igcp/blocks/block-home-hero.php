<?php
  /*
    Home Hero Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  // Variables

  $title = block_field( 'title', false );
  $text = block_field( 'text', false );
  $link_url = block_field( 'link-url', false );
  $link_text = block_field( 'link-text', false );

  $image = block_field( 'image', false );
  $image_url = wp_get_attachment_image_src( $image, 'full-size' )[0];

  $content_background_color = block_field( 'content-background-color', false );
  $content_background_color_style = ' background-color: ' . $content_background_color . ';';

  $content_background_image = block_field( 'content-background-image', false );
  $content_background_image_url = wp_get_attachment_image_src( $content_background_image, 'full-size' )[0];
  $content_background_image_style = ' background-image: url(\'' . $content_background_image_url . '\');';

  $opacity = block_field( 'opacity', false );
?>

<div class="her-Home">
  <div class="her-Home_Body">
    <div class="her-Home_Columns">
      <div class="her-Home_Column" style="<?php if ($content_background_color != '') echo $content_background_color_style; if ($content_background_image != '') echo $content_background_image_style; ?>">
        <div class="her-Home_Content">
          <h2 class="her-Home_Title"><?php echo $title; ?></h2>
          <div class="her-Home_Text">
            <?php echo $text; ?>
          </div>
          <a href="<?php echo $link_url; ?>" class="her-Home_Link"><?php echo $link_text; ?></a>
        </div>
        <div class="her-Home_Overlay" style="opacity: <?php echo $opacity; ?>"></div>
      </div>
      <div class="her-Home_Column her-Home_Column-large">
        <div class="her-Home_ImageWrap">
          <img src="<?php echo $image_url; ?>" alt="<?php echo $title; ?>" class="her-Home_Image">
        </div>
      </div>
    </div>
  </div>
</div>
