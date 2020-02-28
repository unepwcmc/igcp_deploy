<?php
  $post_categories = get_the_category();
  $thumbnail_override = get_field( 'small_image' );

  if ($thumbnail_override != '') {
    $thumbnail_url = $thumbnail_override;
  } else {
    $thumbnail_url = get_the_post_thumbnail_url() != '' ? get_the_post_thumbnail_url() : get_stylesheet_directory_uri() . '/inc/img/card-placeholder.jpg';
  }
?>

<article id="post-<?php the_ID(); ?>" class="crd-Card crd-Card-blog">
	<header class="crd-Card_Header">
    <?php
      if ( ! empty( $post_categories ) ) {
          echo '<span class="crd-Card_Badge">' . esc_html( $post_categories[0]->name ) . '</span>';
      }
    ?>
    <div class="crd-Card_Image">
      <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" />
    </div>
	</header>
	<div class="crd-Card_Body">
		<div class="crd-Card_Content">
      <p class="crd-Card_Details"><?php the_time( 'd/m/y' ); ?></p>
      <h3 class="crd-Card_Title"><?php the_title(); ?></h3>
      <p class="crd-Card_Link">More</p>
		</div>
	</div>
  <a class="crd-Card_FauxLink" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
</article><!-- #post-## -->
