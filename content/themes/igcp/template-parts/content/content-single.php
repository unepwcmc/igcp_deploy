<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

$category = get_the_category();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'ent-Entry rte-RichText' ); ?>>
	<header class="ent-Entry_Header">
		<?php
		the_title( '<h2 class="ent-Entry_Title">', '</h2>' );
		?>
		<p class="ent-Entry_Details"><?php echo $category[0]->name . ' | ' . get_the_date( 'j/m/y' ); ?></p>
	</header><!-- .entry-header -->

	<div class="ent-Entry_Body">
		<div class="ent-Entry_Content">
			<?php
			/* translators: %s: Name of current post */
			the_content(
				sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>' ),
					get_the_title()
					)
				);

				wp_link_pages(
					array(
						'before'      => '<div class="page-links">' . __( 'Pages:' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					)
				);
				?>
			</div><!-- .entry-content -->

		<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
			<div class="ent-Entry_Thumbnail">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'thumbnail' ); ?>
				</a>
			</div><!-- .post-thumbnail -->
		<?php endif; ?>
	</div>

</article><!-- #post-## -->
