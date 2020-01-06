<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

 global $template;

?>

<aside class="lyt-Sidebar">
	<?php if ( ( basename( $template ) === 'archive-families.php' ) || ( basename( $template ) === 'taxonomy-park.php' ) ) : ?>
		<ul class="lyt-Sidebar_Items">
			<li class="lyt-Sidebar_Item">
				<?php echo do_shortcode('[searchandfilter fields="park" types="radio" headings="Parks" empty_search_url="/families/"	]'); ?>
			</li>
		</ul>
  <?php elseif ( ( basename( $template ) === 'archive-team_member.php' ) || ( basename( $template ) === 'taxonomy-role.php' ) ) : ?>
    <ul class="lyt-Sidebar_Items">
      <li class="lyt-Sidebar_Item">
        <?php echo do_shortcode('[searchandfilter fields="role" types="radio" headings="Roles" empty_search_url="/team/"	]'); ?>
      </li>
    </ul>
	<?php else :
	  if ( is_active_sidebar( 'sidebar' ) ) : ?>
			<ul class="lyt-Sidebar_Items">
				<?php dynamic_sidebar( 'sidebar' ); ?>
			</ul>
		<?php	endif; ?>
	<?php endif; ?>
</aside>
