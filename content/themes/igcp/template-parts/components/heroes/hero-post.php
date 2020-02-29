<?php
  /* Variables */
  $background_image = get_post_thumbnail_id( get_the_id() );
  $background_image_url = $background_image != '' ? wp_get_attachment_image_src( $background_image, 'full-size' )[0] : get_theme_mod( 'default_hero_image' );
?>

<div class="her-Post">
	<img src="<?php echo $background_image_url; ?>" alt="" class="her-Post_BackgroundImage">
</div>
