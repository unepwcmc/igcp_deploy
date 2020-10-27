<?php
  /*
    Partners Tiles Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Query */

  $get_items_query = array(
  	'post_type' => 'partner',
  	'order' => 'ASC',
    'posts_per_page' => -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'partner_type',
        'field' => 'name',
        'terms' => 'Coalition Member'
      )
    )
  );

  $get_items = new WP_Query($get_items_query);
?>


  <div class="blk-Partners">
    <div class="blk-Partners_Inner">
      <?php if (get_theme_mod( 'partners_block_title' ) != ''): ?>
        <div class="blk-Partners_Header">
          <h3 class="blk-Partners_Title"><?php echo get_theme_mod( 'partners_block_title' ); ?></h3>
        </div>
      <?php endif; ?>
      <?php if ( $get_items->have_posts() ) : ?>
        <div class="blk-Partners_Body">
          <ul class="blk-Partners_Items">
            <?php while ( $get_items->have_posts() ) : $get_items->the_post(); ?>

              <li class="blk-Partners_Item">
                <div class="blk-Partner">
                  <?php the_post_thumbnail( 'full-size' ); ?>
                  <a href="<?php echo get_field('url'); ?>" class="blk-Partner_FauxLink" target="_blank" rel="noreferrer noopener" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a>
                </div>
              </li>

            <?php endwhile; ?>
          </ul>
        </div>
        <div class="blk-Partners_Footer">
          <a class="blk-Partners_Link" href="/about-us/partners" title="Learn More">Learn More</a>
        </div>
      <?php else : ?>
        <div class="blk-Partners_Body">
          echo '<p class="">Nothing found.</p>';
        </div>
      <?php endif;
        // Reset things, for good measure
        $get_items = null;
        wp_reset_postdata();
      ?>
    </div>
  </div>
