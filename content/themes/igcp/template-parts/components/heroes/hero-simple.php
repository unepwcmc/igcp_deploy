<?php
  /* Variables */
  $title = get_query_var('hero-title');
  $background_image_url = get_query_var( 'hero-background-image' ) != ''
    ? get_query_var( 'hero-background-image' )
    : get_theme_mod( 'default_hero_image' );

  $opacity = get_query_var( 'hero-opacity' ) != ''
    ? get_query_var( 'hero-opacity' )
    : get_theme_mod( 'default_hero_overlay_opacity' );
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
