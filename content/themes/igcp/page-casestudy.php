<?php
/**
 * The template for displaying full width page
 *
 Template Name: Case Study
 *
 */

get_header(); ?>

<?php
	// Page Hero

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();

			/* Variables */
			$hero_title = get_field( 'hero_title' ) != '' ? get_field( 'hero_title' ) : get_the_title();
			set_query_var('hero-title', $hero_title);
			set_query_var('hero-background-image', wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'full-size' )[0]);
			set_query_var('hero-opacity', get_field( 'opacity' ));

			get_template_part( 'template-parts/components/heroes/hero', 'case-study' );

		endwhile; // End of the loop.
	endif;
?>

<div class="lyt-Container">
	<div class="lyt-Container_Inner">
		<section class="lyt-Primary lyt-Primary-restrained">
			<div class="lyt-Primary_Body">
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
			</div>
		</section>
	</div>
</div>
<?php
get_footer();
