<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<div class="lyt-Container lyt-Container-hasSidebar">
	<div class="lyt-Container_Inner">
		<section class="lyt-Primary">
			<?php
				if ( have_posts() ) {

					// Load posts loop.
					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content/content' );
					}

					// Previous/next page navigation.
					the_posts_pagination(
						array(
							'prev_text'          => '<span class="screen-reader-text">' . __( 'Previous page' ) . '</span>',
							'next_text'          => '<span class="screen-reader-text">' . __( 'Next page' ) . '</span>',
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page' ) . ' </span>',
						)
					);

				} else {

					// If no content, include the "No posts found" template.
					get_template_part( 'template-parts/content/content', 'none' );

				}
			?>
		</section>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php
get_footer();
