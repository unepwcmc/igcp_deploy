<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */

get_header(); ?>


<div class="lyt-Container">
	<div class="lyt-Container_Inner" >
		<section class="lyt-Primary lyt-Primary-restrained">
			<header class="lyt-Primary_Header">
				<?php if ( have_posts() ) : ?>
					<h2 class="lyt-Primary_Title"><?php printf( __( 'Results for "%s"' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
					<?php else : ?>
						<h2 class="lyt-Primary_Title"><?php _e( 'Nothing Found' ); ?></h2>
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
					<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.' ); ?></p>
					<div class="lyt-Search">
						<form class="lyt-Search_Form" role="search" method="get" id="searchform" action="<?php echo get_site_url(); ?>">
							<label class="utl-ScreenReaderOnly" for="s">Search for:</label>

							<input type="text" value="" name="s" id="s" class="lyt-Search_Input" placeholder="Search our store..." />

							<input type="hidden" value="1" name="sentence" />

							<input type="hidden" value="product" name="post_type" />

							<input class="lyt-Search_Button" type="submit"></input>
						</form>
					</div>

				<?php endif; ?>
		</section>
	</div>
</div>


<?php
get_footer();
