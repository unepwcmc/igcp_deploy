<?php
  /*
    National Parks Map Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */
  $image = block_field( 'image', false );
  $image_url = wp_get_attachment_image_src( $image, 'full-size' )[0];
?>

<div class="blk-Map">
  <div class="blk-Map_Columns">
    <div class="blk-Map_Column blk-Map_Column-image">
      <div class="blk-Map_ImageWrap">
        <img src="<?php echo $image_url; ?>" alt="#" class="blk-Map_Image">
      </div>
    </div>
    <div class="blk-Map_Column blk-Map_Column-text">
      <div class="blk-Map_Content">
        <p class="blk-Map_Text">We have operations across Rwanda, DRC and Uganda, we use our resources to secure a future the mountain gorillas that call these areas home, click below to find out more about our individual gorilla families:</p>
        <ul class="blk-Map_Items">

          <li class="blk-Map_Item">
            <a href="" class="blk-Map_Link">
              Virunga National Park
              <?php get_template_part( 'template-parts/icons/icon', 'angle-right' );?>
            </a>
          </li>

          <li class="blk-Map_Item">
            <a href="" class="blk-Map_Link">
              Volcanoes National Park
              <?php get_template_part( 'template-parts/icons/icon', 'angle-right' );?>
            </a>
          </li>

          <li class="blk-Map_Item">
            <a href="" class="blk-Map_Link">
              Mgahinga Gorilla National Park
              <?php get_template_part( 'template-parts/icons/icon', 'angle-right' );?>
            </a>
          </li>

          <li class="blk-Map_Item">
            <a href="" class="blk-Map_Link">
              Bwindi Impenetrable National Park
              <?php get_template_part( 'template-parts/icons/icon', 'angle-right' );?>
            </a>
          </li>

          <li class="blk-Map_Item">
            <a href="" class="blk-Map_Link">
              See all gorilla families
              <?php get_template_part( 'template-parts/icons/icon', 'angle-right' );?>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </div>
</div>
