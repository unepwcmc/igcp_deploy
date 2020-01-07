<?php
  /*
    Partners Tiles Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */
  $title = get_field('title', false);

  /* Query */

  $get_items_query = array(
  	'post_type' => 'partner',
  	'order' => 'ASC',
    'posts_per_page' => -1
  );

  $get_items = new WP_Query($get_items_query);
?>

<?php if( $get_items->have_posts() ) : ?>

  <div class="blk-Partners">
    <div class="blk-Partners_Inner">
      <?php if ($title != ''): ?>
        <div class="blk-Partners_Header">
          <h3 class="blk-Partners_Title"><?php echo $title; ?></h3>
        </div>
      <?php endif; ?>
      <div class="blk-Partners_Body">
        <div class="blk-Partners_Tiles">
          <ul class="blk-Partners_Items">

            <?php while( $get_items->have_posts() ) : $get_items->the_post(); ?>

              <li class="blk-Partners_Item">
                <div class="blk-Partner">
                  <?php the_post_thumbnail( 'thumnail' ); ?>
                  <a href="<?php echo get_field('url'); ?>" class="blk-Partner_FauxLink" target="_blank" rel="noreferrer noopener"></a>
                </div>
              </li>

            <?php
              endwhile;
              else :
        			echo '<p class="">Nothing found.</p>';
            ?>

          </ul>
        </div>
      </div>
    </div>
  </div>

<?php endif;
  // Reset things, for good measure
  $get_items = null;
  wp_reset_postdata();
?>
