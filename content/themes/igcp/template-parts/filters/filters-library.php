<?php
 /**
  * Filters for the Library File post type archive page
  * Using the Search & Filter WordPress Plugin - https://searchandfilter.com/
  */

  /* Variables */
  global $template;
?>

<?php if (
  ( basename( $template ) === 'archive-library_file.php' ) ||
  ( basename( $template ) === 'taxonomy-filetype.php' ) ||
  ( basename( $template ) === 'taxonomy-file_tag.php' ) ||
  ( basename( $template ) === 'taxonomy-file_country.php' )
) : ?>
  <div class="flt-Filters">
    <h3 class="flt-Filters_Title">Filters</h3>
    <?php echo do_shortcode('[searchandfilter fields="file_type,file_tag,file_country,file_year" types="checkbox,checkbox,checkbox,checkbox" headings="File Type,Tags,Country,Year" operators="OR,AND,OR" empty_search_url="/library/" submit_label="Filter" ]'); ?>
    <?php if ( basename( $template ) !== 'archive-library_file.php' ) : ?>
      <a class="flt-Filters_Button flt-Filters_Button-clear" href="/library/" title="Clear Filters">Clear Filters</a>
    <?php endif; ?>
  </div>
<?php endif; ?>
