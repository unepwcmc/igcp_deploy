<?php
/**
 * The template for displaying full width page
 *
 Template Name: Front Page
 *
 */

get_header(); ?>

<?php

?>

<div class="lyt-Container">
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
</div>
<?php
get_footer();
