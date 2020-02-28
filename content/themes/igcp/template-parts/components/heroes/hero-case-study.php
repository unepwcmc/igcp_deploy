<?php
  /* Variables */
  $title = get_query_var('hero-title');
  $background_image = get_query_var('hero-background-image');
  $background_image_url = $background_image != '' ? wp_get_attachment_image_src( $background_image, 'full-size' )[0] : get_stylesheet_directory_uri() . '/inc/img/default-hero.png';
  $opacity = get_query_var( 'hero-opacity' ) != '' ? get_query_var( 'hero-opacity' ) : get_theme_mod( 'default_hero_overlay_opacity' );
?>

<div class="her-Page her-Page-caseStudy">
  <div class="her-Page_BackgroundImage">
    <img src="<?php echo $background_image_url; ?>" alt="<?php echo $title; ?>">
  </div>
  <div class="her-Page_Inner">
    <div class="her-Page_Body">
      <div class="her-Page_Content">
        <?php if ($title != ''): ?>
          <h2 class="her-Page_Title"><?php echo $title; ?></h2>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="her-Page_Overlay" style="opacity: <?php echo $opacity; ?>"></div>
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
