<?php
 /**
  * Filters Toggle for the Library post type archive page filter drawer
  */

  /* Variables */
  global $template;
?>

<?php if (
  ( basename( $template ) === 'archive-library_file.php' ) ||
  ( basename( $template ) === 'taxonomy-filetype.php' ) ||
  ( basename( $template ) === 'taxonomy-file_tag.php' ) ||
  ( basename( $template ) === 'taxonomy-file_year.php' ) ||
  ( basename( $template ) === 'taxonomy-file_country.php' )
) : ?>
  <button class="flt-Filters_Toggle" data-drawer-toggle="filter">Filter <?php get_template_part( 'template-parts/icons/icon', 'filter' ); ?></button>
<?php endif; ?>
