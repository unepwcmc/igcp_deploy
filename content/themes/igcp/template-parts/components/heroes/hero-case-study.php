<?php
  /* Variables */
  $title = get_query_var('hero-title');
  $background_image = get_query_var('hero-background-image');
  $background_image_url = $background_image != '' ? wp_get_attachment_image_src( $background_image, 'full-size' )[0] : get_stylesheet_directory_uri() . '/inc/img/default-hero.png';
  $opacity = get_query_var( 'hero-opacity' ) != '' ? get_query_var( 'hero-opacity' ) : get_theme_mod( 'default_hero_overlay_opacity' );
?>

<div class="cst-Hero">
  <div class="cst-Hero_Inner">
    <div class="cst-Hero_Body">
      <div class="cst-Hero_Content">
        <h2 class="cst-Hero_Title"><?php echo $title; ?></h2>
      </div>
    </div>
    <img src="<?php echo $background_image_url; ?>" alt="<?php echo $title; ?>" class="cst-Hero_BackgroundImage">
    <div class="cst-Hero_Overlay" style="opacity: <?php echo $opacity; ?>"></div>
  </div>
  <div class="cst-Hero_Nav">
    <nav class="cst-Nav">
      <ul class="cst-Nav_Items">
        <li class="cst-Nav_Item">
          <a href="#top" class="cst-Nav_Link">Top</a>
        </li>
      </ul>
    </nav>
  </div>
</div>
