<?php
  $post_categories = get_the_category();

  // Get post thumbnail url, output as actual img element
?>

<article id="post-<?php the_ID(); ?>" class="blg-Card">
	<header class="blg-Card_Header">
    <?php
      if ( ! empty( $post_categories ) ) {
          echo '<span class="blg-Card_Badge">' . esc_html( $post_categories[0]->name ) . '</span>';
      }
    ?>
    <div class="blg-Card_Image">
      <?php the_post_thumbnail(); ?>
    </div>
	</header>
	<div class="blg-Card_Body">
		<div class="blg-Card_Content">
      <div class="blg-Card_Details">
        <?php the_time( 'd/m/y' ); ?>
      </div>
      <h3 class="blg-Card_Title"><?php the_title(); ?></h3>
      <p class="blg-Card_Link">More</p>
		</div>
	</div>
  <a class="blg-Card_FauxLink" href="<?php the_permalink(); ?>"></a>
</article><!-- #post-## -->
