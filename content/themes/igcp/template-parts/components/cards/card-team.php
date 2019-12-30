<?php
  $post_categories = get_the_category();

  // Get post thumbnail url, output as actual img element
?>

<article id="post-<?php the_ID(); ?>" class="crd-Team">
	<header class="crd-Team_Header">
    <?php
      if ( ! empty( $post_categories ) ) {
          echo '<span class="crd-Team_Badge">' . esc_html( $post_categories[0]->name ) . '</span>';
      }
    ?>
    <div class="crd-Team_Image">
      <?php the_post_thumbnail(); ?>
    </div>
	</header>
	<div class="crd-Team_Body">
		<div class="crd-Team_Content">
      <h3 class="crd-Team_Title"><?php the_title(); ?></h3>
      <p class="crd-Team_JobTitle"><?php echo get_field( "job_title" ); ?></p>
		</div>
	</div>
</article><!-- #post-## -->
