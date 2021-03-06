<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header(); ?>

<?php
	// Page Hero Settings
	set_query_var( 'hero-title', get_theme_mod( 'search_results_page_hero_title' ) != ''
		? get_theme_mod( 'search_results_page_hero_title' )
		: 'Search results' );

	set_query_var( 'hero-background-image', get_theme_mod( 'search_results_page_hero_image') );
	set_query_var( 'hero-opacity', get_theme_mod( 'search_results_page_hero_overlay_opacity' ) );

	get_template_part('template-parts/components/heroes/hero', 'simple');
?>

<div class="lyt-Container">
	<div class="lyt-Container_Inner" >
		<section class="lyt-Primary lyt-Primary-restrained">
			<header class="lyt-Primary_Header">
				<?php if ( have_posts() ) : ?>
					<h2 class="lyt-Primary_Title"><?php printf( __( 'Showing ' . $wp_query->post_count . ' of ' . $wp_query->found_posts . ' results for "%s"' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
					<?php else : ?>
						<h2 class="lyt-Primary_Title"><?php _e( 'No results found for ' . '<span>' . get_search_query() . '</span>' ); ?></h2>
					<?php endif; ?>
				</header>

				<?php
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						* Run the loop for the search to output the results.
						* If you want to overload this in a child theme then include a file
						* called content-search.php and that will be used instead.
						*/
						get_template_part( 'template-parts/content/content', 'search' );

					endwhile; // End of the loop.

				pagination_bar();

				else :
					?>
					<div class="lyt-Primary_Body">
						<div class="lyt-Search">
							<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.' ); ?></p>
							<form class="lyt-Search_Form" role="search" method="get" id="searchpageform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<label class="utl-ScreenReaderOnly" for="s">Search for:</label>

								<input type="text" value="" name="s" id="s" class="lyt-Search_Input" placeholder="Search here" />

								<input class="lyt-Search_Button" type="submit"></input>
							</form>
						</div>
					</div>

				<?php endif; ?>
		</section>
	</div>
</div>


<?php
get_footer();
