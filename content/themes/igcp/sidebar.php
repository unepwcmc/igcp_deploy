<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<aside class="lyt-Sidebar">
	<div class="sbr-Sidebar"><?php
		// Post archive page
		get_template_part( 'template-parts/filters/toggle', 'posts');
		get_template_part( 'template-parts/filters/filters', 'posts');

		// Family archive page
		get_template_part( 'template-parts/filters/toggle', 'families');
		get_template_part( 'template-parts/filters/filters', 'families');

		// Team archive page
		get_template_part( 'template-parts/filters/toggle', 'team');
		get_template_part( 'template-parts/filters/filters', 'team');

		// Library archive page
		get_template_part( 'template-parts/filters/toggle', 'library');
		get_template_part( 'template-parts/filters/filters', 'library');

		// Widgets
		if ( is_active_sidebar( 'sidebar' ) ) : ?>
		  <div class="sbr-Widgets">
		    <ul class="sbr-Widgets_Items">
						<?php dynamic_sidebar( 'sidebar' ); ?>
		    </ul>
		  </div>
		<?php	endif;
	?></div>
</aside>
