<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<aside class="lyt-Sidebar">
	<?php get_template_part( 'template-parts/filters/toggle', 'posts'); ?>
	<?php get_template_part( 'template-parts/filters/filters', 'posts'); ?>
	<?php get_template_part( 'template-parts/filters/toggle', 'families'); ?>
	<?php get_template_part( 'template-parts/filters/filters', 'families'); ?>
	<?php get_template_part( 'template-parts/filters/toggle', 'team'); ?>
	<?php get_template_part( 'template-parts/filters/filters', 'team'); ?>
	<?php get_template_part( 'template-parts/filters/toggle', 'library'); ?>
	<?php get_template_part( 'template-parts/filters/filters', 'library'); ?>
  <div class="sbr-Widgets">
    <ul class="sbr-Widgets_Items">
  	  <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar' ); ?>
  		<?php	endif; ?>
    </ul>
  </div>
</aside>
