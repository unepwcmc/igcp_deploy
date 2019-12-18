<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */


get_header();

// Page Hero

/* Variables */
$current_post_ID = get_the_id();
set_query_var('hero-title', get_the_archive_title());
set_query_var('hero-text', get_field( "hero_text", $current_post_ID ));
set_query_var('hero-link-url', '#');
set_query_var('hero-background-image', get_post_thumbnail_id($current_post_ID));

get_template_part( 'template-parts/components/heroes/hero', 'page' ); ?>

<div class="lyt-Container lyt-Container-hasSidebar">
	<div class="lyt-Container_Inner">
		<?php get_sidebar(); ?>
		<!-- primary  -->
		<section class="lyt-Primary">
				<div class="lyt-Primary_Body">
					<?php if ( have_posts() ) : ?>
						<ul class="lyt-Entry_Items">
							<?php while ( have_posts() ) : the_post();

								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								echo '<li class="lyt-Entry_Item">';
									get_template_part( 'template-parts/cards/card', 'team' );
								echo '</li>';
							endwhile;
							?>
						</ul>
						<?php
						pagination_bar();
						else :
							get_template_part( 'template-parts/content/content', 'none' );
				endif; ?>
			</div>
		</section>
	</div>
</div>

<?php dynamic_sidebar( 'after-content' ); ?>

<?php get_footer();
