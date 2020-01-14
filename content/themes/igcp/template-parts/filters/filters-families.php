<?php
 /**
  * Filters for the Families post type archive page
  * Using the Search & Filter WordPress Plugin - https://searchandfilter.com/
  */

  /* Variables */
  global $template;
?>

<?php if (
  ( basename( $template ) === 'archive-families.php' ) ||
  ( basename( $template ) === 'taxonomy-park.php' )
) : ?>
  <div class="flt-Filters">
    <h3 class="flt-Filters_Title">Filters</h3>
    <?php echo do_shortcode('[searchandfilter fields="park" types="checkbox" headings="Parks" empty_search_url="/families/" operators="OR" submit_label="Filter" ]'); ?>
    <?php if ( basename( $template ) !== 'archive-families.php' ) : ?>
      <a class="flt-Filters_Button" href="/families/">Clear Filters</a>
    <?php endif; ?>
  </div>
<?php endif; ?>
