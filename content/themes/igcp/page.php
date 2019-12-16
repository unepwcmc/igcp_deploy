<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>
<div class="lyt-Container lyt-Container-hasSidebar">
	<div class="lyt-Container_Inner">
		<section class="lyt-Primary">
				<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content/content', 'page' );

						endwhile; // End of the loop.
					else :
							get_template_part( 'template-parts/content/content', 'none' );
					endif;
				?>
		</section>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php
get_footer();
