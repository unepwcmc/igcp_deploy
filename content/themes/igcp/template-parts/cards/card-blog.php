<?php
  $post_categories = get_the_category();

  // Get post thumbnail url, output as actual img element
?>

<article id="post-<?php the_ID(); ?>" class="crd-Blog">
	<header class="crd-Blog_Header">
    <?php
      if ( ! empty( $post_categories ) ) {
          echo '<span class="crd-Blog_Badge">' . esc_html( $post_categories[0]->name ) . '</span>';
      }
    ?>
    <div class="crd-Blog_Image">
      <?php the_post_thumbnail(); ?>
    </div>
	</header>
	<div class="crd-Blog_Body">
		<div class="crd-Blog_Content">
      <div class="crd-Blog_Details">
        <?php the_time( 'd/m/y' ); ?>
      </div>
      <h3 class="crd-Blog_Title"><?php the_title(); ?></h3>
      <p class="crd-Blog_Link">More</p>
		</div>
	</div>
  <a class="crd-Blog_FauxLink" href="<?php the_permalink(); ?>"></a>
</article><!-- #post-## -->
