<?php
  /* Variables */
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'single-post-thumbnail' );
?>

<div class="pst-Hero">
	<img src="<?php echo $image[0]; ?>" alt="" class="pst-Hero_BackgroundImage">
</div>
