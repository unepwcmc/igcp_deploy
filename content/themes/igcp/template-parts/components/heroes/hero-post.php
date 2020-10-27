<?php
  /* Variables */
  $background_image = get_post_thumbnail_id( get_the_id() );
  $background_image_url = get_query_var( 'hero-background-image' ) != ''
    ? get_query_var( 'hero-background-image' )
    : get_theme_mod( 'default_hero_image' );
?>

<div class="her-Post">
	<img src="<?php echo $background_image_url; ?>" alt="" class="her-Post_BackgroundImage">
</div>
