<?php
 /**
  * Filters Toggle for the Team post type archive page filter drawer
  */

  /* Variables */
  global $template;
?>

<?php if (
  ( basename( $template ) === 'archive-team_member.php' ) ||
  ( basename( $template ) === 'taxonomy-role.php' )
) : ?>
  <button class="flt-Filters_Toggle" data-drawer-toggle="filter">Filter <?php get_template_part( 'template-parts/icons/icon', 'filter' ); ?></button>
<?php endif; ?>
