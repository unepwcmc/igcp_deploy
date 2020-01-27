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
    <?php get_template_part( 'template-parts/drawers/filter' ); ?>
  </div>
  <!-- Drawers End -->
  <?php
    /* <!-- Modal -->
      get_template_part( 'template-parts/components/modals/modal' );
    <!-- Modal End --> */
  ?>
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
                <span class="utl-ScreenReaderOnly"><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></span>
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
                      <button class="hd-Search_Toggle" aria-label="Search Button" data-searchbar-toggle>
                        <?php get_template_part( 'template-parts/icons/icon', 'search' ); ?>
                      </button>
                      <div class="hd-Search_Bar" data-searchbar>
                        <form class="hd-Search_Form" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php /* echo str_replace(get_site_url(),'/wordpress',''); */ ?>
                          <label for="s" class="utl-ScreenReaderOnly">Search for:</label>

                          <input type="text" name="s" id="s" value="" class="hd-Search_Input" placeholder="Search here">

                          <input type="submit" name="" value="Search" class="hd-Search_Button">
                        </form>
                      </div>
                    </div>
                  </div>
                  <?php if (get_theme_mod( 'enable_header_button' )): ?>
                    <div class="hd-Tools_Item hd-Tools_Item-cta">
                      <a href="<?php echo get_theme_mod( 'header_button_url' ); ?>" class="hd-Tools_Button" <?php if (get_theme_mod( 'header_button_external_link' )) echo 'target="_blank"' ?>><?php echo get_theme_mod( 'header_button_text' ); ?></a>
                    </div>
                  <?php endif; ?>
                  <div class="hd-Tools_Item hd-Tools_Item-menuToggle">
                    <button class="hd-Tools_NavToggle" aria-controls="navigation" aria-expanded="false" data-drawer-toggle="menu" aria-label="Menu Toggle">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 23">
                        <g data-name="Group 3" fill="none" stroke="#606060" stroke-width="3">
                          <path data-name="Line 103" d="M0 1.5h30"/>
                          <path data-name="Line 104" d="M0 11.5h30"/>
                          <path data-name="Line 105" d="M0 21.5h30"/>
                        </g>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>

          </div>


        </div>
      </div>
    </div>
  </header>

  <main class="lyt-Main" role="main">
