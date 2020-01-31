<div class="drw-Drawer" data-drawer="menu">
 <div class="drw-Drawer_Inner">
   <div class="drw-Drawer_Header">
     <a class="drw-Drawer_Logo" href="/">
       <span class="utl-ScreenReaderOnly"><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?>"</span>
       <?php get_template_part( 'template-parts/global/logo', 'plain' ); ?>
     </a>
     <button class="drw-Drawer_Close" aria-label="Close" data-drawer-menu-close>
       <?php get_template_part( 'template-parts/icons/icon', 'close' ); ?>
     </button>
     <?php if (get_theme_mod( 'enable_header_button' )): ?>
       <a href="<?php echo get_theme_mod( 'header_button_url' ); ?>" class="drw-Drawer_Button" <?php if (get_theme_mod( 'header_button_external_link' )) echo 'target="_blank"' ?>><?php echo get_theme_mod( 'header_button_text' ); ?></a>
     <?php endif; ?>
   </div>
   <div class="drw-Drawer_Body">
     <nav class="drw-Drawer_Nav">
       <?php get_template_part( 'template-parts/navigation/navigation', 'mobile' ); ?>
     </nav>
   </div>
 </div>
</div>
