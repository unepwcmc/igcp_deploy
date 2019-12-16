<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>

<aside class="lyt-Sidebar">
	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
		<ul class="lyt-Sidebar_Items">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</ul>
	<?php endif; ?>
</aside>
