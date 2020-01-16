<?php
  /* Variables */
  $title = get_query_var('hero-title');
  $text = get_query_var('hero-text') != '' ? get_query_var('hero-text') : get_theme_mod( 'default_hero_text' );
  $link_url = get_query_var('hero-link-url') != '' ? get_query_var('hero-link-url') : get_page_link( get_theme_mod( 'default_hero_button_link' ) );
  $link_text = get_query_var('hero-link-text') != '' ? get_query_var('hero-link-text') : get_theme_mod( 'default_hero_button_text' );
  $background_image = get_query_var('hero-background-image');
  $background_image_url = $background_image != '' ? wp_get_attachment_image_src( $background_image, 'full-size' )[0] : get_theme_mod( 'default_hero_image' );
  $opacity = '0.4';
?>

<div class="pge-Hero">
  <div class="pge-Hero_BackgroundImage">
    <img src="<?php echo $background_image_url; ?>" alt="<?php echo $title; ?>">
  </div>
  <div class="pge-Hero_Inner">
    <div class="pge-Hero_Body">
      <div class="pge-Hero_Content">
        <?php if ($title != ''): ?>
          <h2 class="pge-Hero_Title"><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if ($text != ''): ?>
          <p class="pge-Hero_Text"><?php echo $text; ?></p>
        <?php endif; ?>
        <?php if ($link_url != ''): ?>
          <a href="<?php echo $link_url; ?>" class="pge-Hero_Link"><?php echo $link_text; ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="pge-Hero_Overlay" style="opacity: <?php echo $opacity; ?>"></div>
</div>
