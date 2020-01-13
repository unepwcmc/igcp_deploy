<?php
 /**
  * Filters for the default WordPress posts archive page
  * Using the Search & Filter WordPress Plugin - https://searchandfilter.com/
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
  <div class="flt-Filters">
    <ul class="flt-Filters_Items">
      <li class="flt-Filters_Item">
        <h3 class="flt-Filters_Title">Filters</h3>
        <?php echo do_shortcode('[searchandfilter fields="category,post_tag,post_country,post_year" types="checkbox,checkbox,checkbox,checkbox" empty_search_url="/updates/" operators="OR,AND,OR,AND" headings="Categories,Tags,Country,Year"]'); ?>
        <?php if ( basename( $template ) !== 'home.php' ) : ?>
          <a class="flt-Filters_Button" href="/updates/">Clear Filters</a>
        <?php endif; ?>
      </li>
    </ul>
  </div>
<?php endif; ?>