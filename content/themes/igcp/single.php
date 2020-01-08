<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

get_header(); ?>

<?php
	get_template_part('template-parts/components/heroes/hero', 'post');
?>

<div class="lyt-Container">
	<div class="lyt-Container_Inner">
		<section class="lyt-Primary lyt-Primary-restrained rte-RichText">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'single' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;


				/* Navigation Links
				previous_post_link( '&laquo; %link', 'Previous Post', true );
				echo ' | ';
				next_post_link( '%link &raquo;', 'Next Post', true );
				*/

			endwhile; // End of the loop.
			?>

			<?php get_template_part( 'template-parts/social/social', 'share' ); ?>
			<?php get_template_part( 'template-parts/components/related', 'articles' ); ?>
		</section>
	</div>
</div>

<?php get_footer();
