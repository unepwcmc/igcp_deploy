<?php
 /**
  * Filters for the Team Member post type archive page
  * Using the Search & Filter WordPress Plugin - https://searchandfilter.com/
  */

  /* Variables */
  global $template;
?>

<?php if (
  ( basename( $template ) === 'archive-team_member.php' ) ||
  ( basename( $template ) === 'taxonomy-role.php' )
) : ?>
  <div class="flt-Filters">
    <h3 class="flt-Filters_Title">Filters</h3>
    <?php echo do_shortcode('[searchandfilter fields="role" types="checkbox" headings="Roles" operators="OR" post_types="team_member" empty_search_url="/team/" submit_label="Filter"]'); ?>
    <?php if ( basename( $template ) !== 'archive-team_member.php' ) : ?>
      <a class="flt-Filters_Button flt-Filters_Button-clear" href="/team/" title="Clear Filters">Clear Filters</a>
    <?php endif; ?>
  </div>
<?php endif; ?>
