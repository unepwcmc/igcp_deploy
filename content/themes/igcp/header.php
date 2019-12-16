<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" dir="ltr" class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|', true, 'right'); ?><?php echo get_bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php
    wp_head();
  ?>
</head>

<body <?php body_class('page'); ?>>
  <!-- Drawers -->
  <div class="drw-Drawers">
    <div class="drw-Drawers_Overlay" data-drawers-overlay></div>
    <?php get_template_part( 'template-parts/drawers/menu' ); ?>
  </div>
  <!-- Drawers End -->
  <!-- Modal -->
  <?php /* get_template_part( 'template-parts/modal/modal' ); */ ?>
  <!-- Modal End -->
  <!-- Header -->
  <header class="lyt-Header">
    <div class="hd-Header">
      <div class="hd-Header_Inner">
        <div class="hd-Header_Body">

          <div class="hd-Header_Items">
            <div class="hd-Header_Item hd-Header_Item-logo">
              <!-- Site Name & Logo  -->
              <h1 class="hd-Header_Title"><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></h1>
              <a class="hd-Header_Logo" href="/" title="<?php echo get_bloginfo('name'); ?>">
                <?php get_template_part( 'template-parts/global/logo' ); ?>
              </a>
            </div>
            <div class="hd-Header_Item hd-Header_Item-nav">
              <!-- Main Navigation -->
              <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
              <?php endif; ?>
            </div>
            <div class="hd-Header_Item hd-Header_Item-tools">
              <div class="hd-Tools">
                <div class="hd-Tools_Items">
                  <div class="hd-Tools_Item hd-Tools_Item-search">
                    <div class="hd-Search">
                      <div class="hd-Search_Icon">
                        <?php get_template_part( 'template-parts/icons/icon', 'search' ); ?>
                      </div>
                      <div class="hd-Search_Bar">
                        <input type="text" name="" value="" class="hd-Search_Input">
                        <input type="submit" name="" value="Search" class="hd-Search_Button">
                      </div>
                    </div>
                  </div>
                  <?php if (get_theme_mod( 'enable_header_button' )): ?>
                    <div class="hd-Tools_Item">
                      <a href="<?php echo get_theme_mod( 'header_button_url' ); ?>" class="hd-Tools_Button" <?php if (get_theme_mod( 'header_button_external_link' )) echo 'target="_blank"' ?>><?php echo get_theme_mod( 'header_button_text' ); ?></a>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </header>

  <main class="lyt-Main" role="main">
