<?php
  $filetype_data = get_the_terms(get_the_ID(), 'file_type');
  $filetype_name = $filetype_data[0]->name;
  $thumbnail_url = get_the_post_thumbnail_url() != '' ? get_the_post_thumbnail_url() : get_stylesheet_directory_uri() . '/inc/img/card-placeholder.jpg';
?>

<article id="post-<?php echo $post_ID; ?>" class="crd-Card crd-Card-file">
	<header class="crd-Card_Header">
    <?php
      if ( ! empty( $filetype_name != '' ) ) {
          echo '<span class="crd-Card_Badge">' . $filetype_name . '</span>';
      }
    ?>
    <div class="crd-Card_Image">
      <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" />
    </div>
	</header>
	<div class="crd-Card_Body">
		<div class="crd-Card_Content">
      <h3 class="crd-Card_Title"><?php the_title(); ?></h3>
      <p class="crd-Card_Link">View</p>
      <div class="crd-Card_Icon"><?php get_template_part( 'template-parts/icons/icon',  $filetype_data[0]->slug ); ?></div>
		</div>
	</div>
  <a href="<?php echo get_field( 'file' ); ?>" class="crd-Card_FauxLink" title="<?php the_title(); ?>"></a>
</article><!-- #post-## -->
