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

	get_header();

	// Page Hero Settings
	set_query_var( 'hero-title', get_theme_mod( 'updates_page_hero_title' ) != ''
		? get_theme_mod( 'updates_page_hero_title' )
		: get_the_archive_title() );

	set_query_var( 'hero-background-image', get_theme_mod( 'updates_page_hero_image') );
	set_query_var( 'hero-opacity', get_theme_mod( 'updates_page_hero_overlay_opacity' ) );

	set_query_var('hero-text', get_theme_mod( 'updates_page_hero_text' ));
	set_query_var('hide-text', get_theme_mod( 'updates_page_hero_hide_text' ));

	// Archive pages only have one button
	set_query_var('hero-link-url-2', get_theme_mod( 'updates_page_hero_button_url' ));
	set_query_var('hero-link-text-2', get_theme_mod( 'updates_page_hero_button_text' ));
	set_query_var('hide-buttons', get_theme_mod( 'updates_page_hero_hide_button' ));

	get_template_part( 'template-parts/components/heroes/hero', 'page' );
	// outputFilterParams();
?>

<div class="lyt-Container lyt-Container-hasSidebar">
	<div class="lyt-Container_Inner">
		<?php get_sidebar(); ?>
		<!-- primary  -->
		<section class="lyt-Primary lyt-Primary-archive">
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
									get_template_part( 'template-parts/components/cards/card', 'blog' );
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

<?php echo do_shortcode('[content_block slug=archive-page]'); ?>

<?php get_footer();
