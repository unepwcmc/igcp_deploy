<?php
  /*
    Partners Tiles Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */

  /* Query */

  $get_items_query = array(
  	'post_type' => 'partner',
  	'order' => 'ASC',
    'posts_per_page' => -1
  );

  $get_items = new WP_Query($get_items_query);
?>

<?php if( $get_items->have_posts() ) : ?>

  <div class="til-Partners_Tiles">
    <ul class="til-Partners_Items">

      <?php while( $get_items->have_posts() ) : $get_items->the_post(); ?>

        <li class="til-Partners_Item">
          <div class="til-Partner">
            <?php the_post_thumbnail( 'thumnail' ); ?>
          </div>
        </li>

      <?php
        endwhile;
        else :
  			echo '<p class="">Nothing found.</p>';
      ?>

    </ul>
  </div>

<?php endif;
  // Reset things, for good measure
  $get_items = null;
  wp_reset_postdata();
?>
