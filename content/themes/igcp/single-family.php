<?php
	get_header();

	// Page Hero

	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();

			/* Variables */
			set_query_var('hero-title', get_the_title());
			set_query_var('hero-text', get_field( "hero_text" ));
			set_query_var('hero-link-url', '#');
			set_query_var('hero-background-image', get_post_thumbnail_id(get_the_id()));

			// $text = block_field( 'text', false );
			// $link_url = block_field( 'link-url', false );
			// $link_text = block_field( 'link-text', false );
			// $background_image = block_field( 'background-image', false );
			// $background_image_url = wp_get_attachment_image_src( $background_image, 'full-size' )[0];
			// $opacity = block_field( 'opacity', false );

			get_template_part( 'template-parts/components/component', 'hero' );

		endwhile; // End of the loop.
	endif;
?>

<div class="lyt-Container">
	<div class="lyt-Container_Inner">
		<section class="lyt-Primary lyt-Primary-restrained">
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
