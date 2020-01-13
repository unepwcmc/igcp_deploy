<div class="drw-Drawer" data-drawer="filter">
  <div class="drw-Drawer_Inner">
    <div class="drw-Drawer_Header">
      <h3 class="drw-Drawer_Title">Filters</h3>
      <button class="drw-Drawer_Close" aria-label="Close" data-drawer-menu-close>
        <?php get_template_part( 'template-parts/icons/icon', 'close' ); ?>
      </button>
    </div>
    <div class="drw-Drawer_Body">
      <?php get_template_part( 'template-parts/filters/filters', 'posts'); ?>
    	<?php get_template_part( 'template-parts/filters/filters', 'families'); ?>
    	<?php get_template_part( 'template-parts/filters/filters', 'team'); ?>
    	<?php get_template_part( 'template-parts/filters/filters', 'library'); ?>
    </div>
    <div class="drw-Drawer_Footer">
      <button class="drw-Drawer_Submit">Show results</button>
    </div>
  </div>
</div>
