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
		<section class="lyt-Primary lyt-Primary-restrained error-404 not-found">
			<div class="lyt-Primary_Body">
				<div class="ent-Entry">
					<header class="ent-Entry_Header">
						<h2 class="ent-Entry_Title"><?php _e( 'Oops! That page can&rsquo;t be found.' ); ?></h2>
						<p class="ent-Entry_Details"></p>
					</header>
					<div class="ent-Entry_Body">
						<div class="ent-Entry_Content">
							<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?' ); ?></p>
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<?php
get_footer();
