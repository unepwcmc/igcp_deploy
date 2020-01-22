<?php
  /* Variables */
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'single-post-thumbnail' );
?>

<div class="her-Post">
	<img src="<?php echo $image[0]; ?>" alt="" class="her-Post_BackgroundImage">
</div>
