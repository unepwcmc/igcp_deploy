<?php
 /**
  * Filters Toggle for the Families post type archive page filter drawer
  */

  /* Variables */
  global $template;
?>

<?php if (
  ( basename( $template ) === 'archive-families.php' ) ||
  ( basename( $template ) === 'taxonomy-park.php' )
) : ?>
  <button class="flt-Filters_Toggle" data-drawer-toggle="filter">Filter <?php get_template_part( 'template-parts/icons/icon', 'filter' ); ?></button>
<?php endif; ?>
