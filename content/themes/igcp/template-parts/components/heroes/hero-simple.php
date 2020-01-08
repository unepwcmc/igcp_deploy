<?php
  /* Variables */
  $title = get_query_var('hero-title');
  $background_image = get_query_var('hero-background-image');
  $background_image_url = $background_image != '' ? wp_get_attachment_image_src( $background_image, 'full-size' )[0] : get_stylesheet_directory_uri() . '/inc/img/default-hero.png';
  $opacity = '0.4';
?>

<div class="smp-Hero">
  <div class="smp-Hero_Inner">
    <div class="smp-Hero_Body">
      <div class="smp-Hero_Content">
        <h2 class="smp-Hero_Title"><?php echo $title; ?></h2>
      </div>
    </div>
  </div>
  <img src="<?php echo $background_image_url; ?>" alt="<?php echo $title; ?>" class="smp-Hero_BackgroundImage">
  <div class="smp-Hero_Overlay" style="opacity: <?php echo $opacity; ?>"></div>
</div>
