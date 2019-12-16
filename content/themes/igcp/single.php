<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'single-post-thumbnail' );

get_header(); ?>

<div class="pge-Hero">
	<div class="pge-Hero_Inner">
		<div class="pge-Hero_Body">
			<h1 class="pge-Hero_Title"><?php the_title(); ?></h1>
			<p class="pge-Hero_Date"><?php echo get_the_date(); ?></p>
		</div>
	</div>
	<div class="pge-Hero_Overlay"></div>
	<img src="<?php echo $image[0]; ?>" alt="" class="pge-Hero_BackgroundImage">
</div>

<div class="lyt-Container lyt-Container-hasSidebar">
	<div class="lyt-Container_Inner">
		<section class="lyt-Primary">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'single' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				previous_post_link( '&laquo; %link', 'Previous Post', true );
				echo ' | ';
				next_post_link( '%link &raquo;', 'Next Post', true );

			endwhile; // End of the loop.
			?>
		</section>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer();
