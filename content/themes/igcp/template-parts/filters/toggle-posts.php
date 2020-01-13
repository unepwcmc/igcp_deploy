<?php
 /**
  * Filters Toggle for the default WordPress posts archive page filter drawer
  */

  /* Variables */
  global $template;
?>

<?php if (
  ( basename( $template ) === 'home.php' ) ||
  ( basename( $template ) === 'category.php' ) ||
  ( basename( $template ) === 'tag.php' ) ||
  ( basename( $template ) === 'taxonomy-post_country.php' )
) : ?>
  <button class="flt-Filters_Toggle" data-drawer-toggle="filter">Filter <?php get_template_part( 'template-parts/icons/icon', 'filter' ); ?></button>
<?php endif; ?>
