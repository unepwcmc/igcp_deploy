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

<?php
	// Page Hero

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();

			/* Variables */
			$hero_title = get_field( "hero_title" ) != '' ? get_field( "hero_title" ) : get_the_title();
			set_query_var('hero-title', $hero_title);
			set_query_var('hero-text', get_field( "hero_text" ));
			set_query_var('hero-link-text', get_field( "button_text" ));
			set_query_var('hero-link-url', get_field( "button_url" ));
			set_query_var('hero-background-image', get_post_thumbnail_id(get_the_id()));

			get_template_part( 'template-parts/components/heroes/hero', 'page' );

		endwhile; // End of the loop.
	endif;
?>

<div class="lyt-Container lyt-Container-hasSidebar">
	<div class="lyt-Container_Inner">
		<?php get_sidebar(); ?>
		<section class="lyt-Primary lyt-Primary-simple">
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
	</div>
</div>
<?php
get_footer();
