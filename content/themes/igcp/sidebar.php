<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

 global $template;

?>
<div class="lyt-Sidebar">
  <aside class="sbr-Widgets">
  	<?php if (
      ( basename( $template ) === 'home.php' ) ||
      ( basename( $template ) === 'category.php' ) ||
      ( basename( $template ) === 'tag.php' ) ||
      ( basename( $template ) === 'taxonomy-post_country.php' )
    ) : ?>
  		<ul class="sbr-Widgets_Items">
  			<li class="sbr-Widgets_Item sbr-Widgets_Item-filters">
          <h3 class="sbr-Widgets_Title">Filters</h3>
          <?php echo do_shortcode('[searchandfilter fields="category,post_tag,post_country" types="checkbox,checkbox,checkbox" empty_search_url="/updates/" operators="OR,AND,OR" headings="Categories,Tags,Country"]'); ?>
          <?php if ( basename( $template ) !== 'home.php' ) : ?>
            <a class="sbr-Widgets_Button" href="/updates/">Clear Filters</a>
          <?php endif; ?>
  			</li>
        <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar' ); ?>
        <?php	endif; ?>
  		</ul>
  	<?php elseif (
      ( basename( $template ) === 'archive-families.php' ) ||
      ( basename( $template ) === 'taxonomy-park.php' )
    ) : ?>
  		<ul class="sbr-Widgets_Items">
  			<li class="sbr-Widgets_Item sbr-Widgets_Item-filters">
          <h3 class="sbr-Widgets_Title">Filters</h3>
          <?php echo do_shortcode('[searchandfilter fields="park" types="checkbox" headings="Parks" empty_search_url="/families/" operators="OR" submit_label="Filter" ]'); ?>
          <?php if ( basename( $template ) !== 'archive-families.php' ) : ?>
            <a class="sbr-Widgets_Button" href="/families/">Clear Filters</a>
          <?php endif; ?>
  			</li>
        <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar' ); ?>
        <?php	endif; ?>
  		</ul>
    <?php elseif (
      ( basename( $template ) === 'archive-team_member.php' ) ||
      ( basename( $template ) === 'taxonomy-role.php' )
    ) : ?>
      <ul class="sbr-Widgets_Items">
        <li class="sbr-Widgets_Item sbr-Widgets_Item-filters">
          <h3 class="sbr-Widgets_Title">Filters</h3>
          <?php echo do_shortcode('[searchandfilter fields="role" types="radio" headings="Roles" operators="OR" post_types="team_member" empty_search_url="/team/" submit_label="Filter" ]'); ?>
          <?php if ( basename( $template ) !== 'archive-team_member.php' ) : ?>
            <a class="sbr-Widgets_Button" href="/team/">Clear Filters</a>
          <?php endif; ?>
        </li>
        <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar' ); ?>
        <?php	endif; ?>
      </ul>
    <?php elseif (
      ( basename( $template ) === 'archive-library_file.php' ) ||
      ( basename( $template ) === 'taxonomy-filetype.php' ) ||
      ( basename( $template ) === 'taxonomy-file_tag.php' ) ||
      ( basename( $template ) === 'taxonomy-file_country.php' )
    ) : ?>
      <ul class="sbr-Widgets_Items">
        <li class="sbr-Widgets_Item sbr-Widgets_Item-filters">
          <h3 class="sbr-Widgets_Title">Filters</h3>
          <?php echo do_shortcode('[searchandfilter fields="filetype,file_tag,file_country" types="checkbox,checkbox,checkbox" headings="File Type,Tags,Country" operators="OR,AND,OR" empty_search_url="/library/" submit_label="Filter" ]'); ?>
          <?php if ( basename( $template ) !== 'archive-library_file.php' ) : ?>
            <a class="sbr-Widgets_Button" href="/library/">Clear Filters</a>
          <?php endif; ?>
        </li>
        <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar' ); ?>
        <?php	endif; ?>
      </ul>
  	<?php else :
  	  if ( is_active_sidebar( 'sidebar' ) ) : ?>
  			<ul class="sbr-Widgets_Items">
  				<?php dynamic_sidebar( 'sidebar' ); ?>
  			</ul>
  		<?php	endif; ?>
  	<?php endif; ?>
  </aside>
</div>
