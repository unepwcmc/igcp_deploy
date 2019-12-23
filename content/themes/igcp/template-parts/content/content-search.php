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

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'ent-Excerpt' ); ?>>
	<div class="ent-Excerpt_Body">
		<div class="ent-Excerpt_Columns">
			<div class="ent-Excerpt_Column">
				<div class="ent-Excerpt_Thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
			</div>
			<div class="ent-Excerpt_Column">
				<?php
				the_title( sprintf( '<h2 class="ent-Excerpt_Title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				?>
				<div class="ent-Excerpt_Details">
					<?php
					echo get_the_date( get_option('date_format') ); echo get_the_tag_list(' - ',', ','');
					?>
				</div>
				<div class="ent-Excerpt_Content">
					<?php
					the_excerpt();
					?>
					<a class="ent-Excerpt_Link" href="<?php the_permalink(); ?>">Read more</a>
			</div>
		</div>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
