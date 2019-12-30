<?php
  /* Variables */
  $current_ID = get_the_ID();
  $category = get_the_category( $current_ID );
  $category_ID = $category[0]->cat_ID;
  /* Query */
  $get_items_query = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'category__and' => $category_ID,
    'post__not_in' => array($current_ID)
  );

  $get_items = new WP_Query($get_items_query);
?>

<div class="art-Related">
  <div class="art-Related_Header">
    <h3 class="art-Related_Title">Other articles</h3>
  </div>
  <div class="art-Related_Body">
    <?php if ( have_posts() ) : ?>
      <ul class="art-Related_Items">
        <?php while ( $get_items->have_posts() ) : $get_items->the_post(); ?>
          <li class="art-Related_Item">
            <?php get_template_part( 'template-parts/components/cards/card', 'blog' ); ?>
          </li>
        <?php endwhile ?>
      </ul>
      <?php
      else :
        get_template_part( 'template-parts/content/content', 'none' );
      endif; ?>
  </div>
</div>
