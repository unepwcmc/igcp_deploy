<?php
	get_header();

	// Page Hero

	/* Variables */
	$current_post_ID = get_the_id();
	set_query_var('hero-title', get_the_title($current_post_ID));
	set_query_var('hero-text', 'Gorilla Family');

	set_query_var('hero-background-image', wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'full-size' )[0]);
	get_template_part( 'template-parts/components/heroes/hero', 'page' );
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
				<?php echo do_shortcode('[content_block slug=about-gorillas]'); ?>
				<?php get_template_part( 'template-parts/components/park', 'info' ); ?>
				<?php get_template_part( 'template-parts/components/related', 'families' ); ?>
			</div>
		</section>
	</div>
</div>
<?php
get_footer();
