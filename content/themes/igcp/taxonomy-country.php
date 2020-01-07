<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */


	get_header();

	get_template_part( 'template-parts/components/modals/modal', 'team' );

	// Page Hero
	set_query_var('hero-title', get_the_archive_title());
	get_template_part( 'template-parts/components/heroes/hero', 'page' );
?>

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
								*/ ?>
								<li class="lyt-Entry_Item">
									<?php
										$postType = get_post_type_object(get_post_type());
										if ($postType->name == 'team_member') {
											get_template_part( 'template-parts/components/cards/card', 'team' );
										} elseif ($postType->name == 'library_file') {
											get_template_part( 'template-parts/components/cards/card', 'file' );
										} elseif ($postType->name == 'family') {
											get_template_part( 'template-parts/components/cards/card', 'family' );
										} elseif ($postType->name == 'post') {
											get_template_part( 'template-parts/components/cards/card', 'blog' );
										} else {
											echo $postType->name;
											get_template_part( 'template-parts/components/cards/card', 'blog' );
										}
									?>
								</li>
							<?php endwhile; ?>
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

<?php get_footer();