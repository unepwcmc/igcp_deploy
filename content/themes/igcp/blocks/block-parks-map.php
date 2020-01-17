<?php
  /*
    National Parks Map Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
    Uses styles from Park Info Component in SCSS directory
  */

  /* Variables */
  $title = block_field( 'title', false );
  $image = block_field( 'image', false );
  $image_url = wp_get_attachment_image_src( $image, 'full-size' )[0];
  $text = block_field( 'text', false );

  $park_terms = get_terms( array(
    'taxonomy' => 'park'
  ));
?>

<div class="blk-Map">
  <div class="blk-Map_Header">
    <h3 class="blk-Map_Title"><?php echo $title; ?></h3>
  </div>
  <div class="blk-Map_Body">
    <div class="blk-Map_Columns">
      <div class="blk-Map_Column blk-Map_Column-image">
        <div class="blk-Map_ImageWrap">
          <img src="<?php echo $image_url; ?>" alt="<?php echo $title; ?>" class="blk-Map_Image">
        </div>
      </div>
      <div class="blk-Map_Column blk-Map_Column-text">
        <div class="blk-Map_Content">
          <p class="blk-Map_Text"><?php echo $text; ?></p>
          <ul class="blk-Map_Items">
            <?php foreach ($park_terms as $park_term) : ?>

                <li class="blk-Map_Item">
                  <a href="/park/<?php echo $park_term->slug; ?>/" class="blk-Map_Link">
                    <?php echo $park_term->name; ?>
                    <?php get_template_part( 'template-parts/icons/icon', 'angle-right' );?>
                  </a>
                </li>

            <?php endforeach; ?>
            <li class="blk-Map_Item">
              <a href="/families" class="blk-Map_Link">
                See all gorilla families
                <?php get_template_part( 'template-parts/icons/icon', 'angle-right' );?>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
