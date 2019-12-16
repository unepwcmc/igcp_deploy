<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 */

get_header(); ?>

<div class="lyt-Container">
	<div class="lyt-Container_Inner">
		<section class="lyt-Primary error-404 not-found">
			<header class="lyt-Primary_Header">
				<h1 class="lyt-Primary_Title"><?php _e( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
			</header>
			<div class="lyt-Primary_Content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?' ); ?></p>
				<?php get_search_form(); ?>
			</div>
		</section>
	</div>
</div>

<?php
get_footer();
