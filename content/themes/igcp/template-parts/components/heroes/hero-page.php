<?php
  /* Variables */
  $title = get_query_var( 'hero-title' );

  $text = get_query_var( 'hero-text' ) != ''
    ? get_query_var( 'hero-text' )
    : get_theme_mod( 'default_hero_text' );

  $hide_text = get_query_var( 'hide-text' );

  if (get_query_var( 'hero-link-url' ) != '') {
    $link_url = get_query_var( 'hero-link-url' );
  } else {
    $link_url = get_theme_mod( 'default_hero_button_link' ) != 0
    ? get_page_link( get_theme_mod( 'default_hero_button_link' ) )
    : '';
  }

  $link_text = get_query_var( 'hero-link-text' ) != ''
    ? get_query_var( 'hero-link-text' )
    : get_theme_mod( 'default_hero_button_text' );

  if (get_query_var( 'hero-link-url-2' ) != '') {
    $link_url_2 = get_query_var( 'hero-link-url-2' );
  } else {
    $link_url_2 = get_theme_mod( 'default_hero_button_link_2' ) != 0
    ? get_page_link( get_theme_mod( 'default_hero_button_link_2' ) )
    : '';
  }

  $link_text_2 = get_query_var( 'hero-link-text-2' ) != ''
    ? get_query_var( 'hero-link-text-2' )
    : get_theme_mod( 'default_hero_button_text_2' );

  $hide_buttons = get_query_var( 'hide-buttons' );

  $background_image_url = get_query_var( 'hero-background-image' ) != ''
    ? get_query_var( 'hero-background-image' )
    : get_theme_mod( 'default_hero_image' );

  $opacity = get_query_var( 'hero-opacity' ) != ''
    ? get_query_var( 'hero-opacity' )
    : get_theme_mod( 'default_hero_overlay_opacity' );
?>

<div class="her-Page">
  <div class="her-Page_BackgroundImage">
    <img src="<?php echo $background_image_url; ?>" alt="<?php echo $title; ?>">
  </div>
  <div class="her-Page_Inner">
    <div class="her-Page_Body">
      <div class="her-Page_Content">
        <?php if ($title != ''): ?>
          <h2 class="her-Page_Title"><?php echo $title; ?></h2>
        <?php endif; ?>
        <?php if ($text != '' && !$hide_text): ?>
          <p class="her-Page_Text"><?php echo $text; ?></p>
        <?php endif; ?>
        <?php if (!$hide_buttons): ?>
          <?php if ($link_url != '' || $link_url_2 != ''): ?>
            <ul class="her-Page_Items<?php if ($link_url && $link_url_2) echo ' her-Page_Items-flex' ?>">
              <?php if ($link_url != ''): ?>
                <li class="her-Page_Item">
                  <a href="<?php echo $link_url; ?>" class="her-Page_Link her-Page_Link-secondary" title="<?php echo $link_text; ?>"><?php echo $link_text; ?></a>
                </li>
              <?php endif; ?>
              <?php if ($link_url_2 != ''): ?>
                <li class="her-Page_Item">
                  <a href="<?php echo $link_url_2; ?>" class="her-Page_Link" title="<?php echo $link_text_2; ?>"><?php echo $link_text_2; ?></a>
                </li>
              <?php endif; ?>
            </ul>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="her-Page_Overlay" style="opacity: <?php echo $opacity; ?>"></div>
</div>
