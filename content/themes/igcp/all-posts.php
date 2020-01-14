<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */


get_header(); ?>

<div class="lyt-Container lyt-Container-hasSidebar">
	<div class="lyt-Container_Inner">
		<?php get_sidebar(); ?>
		<!-- primary  -->
		<section class="lyt-Primary">
				<div class="lyt-Primary_Body lyt-Primary-archive">
					<?php if ( have_posts() ) : ?>
						<ul class="lyt-Entry_Items">
							<?php while ( have_posts() ) : the_post();
								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/ ?>
								<li class="lyt-Entry_Item">
									<?php get_template_part( 'template-parts/components/cards/card', 'blog' ); ?>
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

<?php echo do_shortcode('[content_block slug=archive-page]'); ?>

<?php get_footer();
