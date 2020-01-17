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
							<form class="lyt-Search_Form" role="search" method="get" id="searchpageform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<label class="utl-ScreenReaderOnly" for="s">Search for:</label>

								<input type="text" value="" name="s" id="s" class="lyt-Search_Input" placeholder="Search here" />

								<input class="lyt-Search_Button" type="submit"></input>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<?php
get_footer();
