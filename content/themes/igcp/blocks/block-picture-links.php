<?php
  /*
    Picture Links Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */

  // Page 1
  $page_1 = block_field( 'page-1', false );
  $page_1_slug = str_replace('/','',$page_1);
  $page_1_data = get_page_by_path( 'mountain-gorillas' );
  $page_1_id = $page_1_data->ID;
  $page_1_title = $page_1_data->post_title;
  $page_1_img_url = get_the_post_thumbnail_url($page_1_id, 'full');

  // Page 2
  $page_2 = block_field( 'page-2', false );
  $page_2_slug = str_replace('/','',$page_2);
  $page_2_data = get_page_by_path( 'mountain-gorillas' );
  $page_2_id = $page_2_data->ID;
  $page_2_title = $page_2_data->post_title;
  $page_2_img_url = get_the_post_thumbnail_url($page_2_id, 'full');

  // Page 3
  $page_3 = block_field( 'page-3', false );
  $page_3_slug = str_replace('/','',$page_3);
  $page_3_data = get_page_by_path( 'mountain-gorillas' );
  $page_3_id = $page_3_data->ID;
  $page_3_title = $page_3_data->post_title;
  $page_3_img_url = get_the_post_thumbnail_url($page_3_id, 'full');

  // Page 4
  $page_4 = block_field( 'page-4', false );
  $page_4_slug = str_replace('/','',$page_4);
  $page_4_data = get_page_by_path( 'mountain-gorillas' );
  $page_4_id = $page_4_data->ID;
  $page_4_title = $page_4_data->post_title;
  $page_4_img_url = get_the_post_thumbnail_url($page_4_id, 'full');
?>

<div class="blk-PictureLinks">
  <ul class="blk-PictureLinks_Items">

    <li class="blk-PictureLinks_Item">
      <div class="blk-PictureLink">
        <a class="blk-PictureLink_FauxLink" href="#"></a>
        <div class="blk-PictureLink_Body">
          <div class="blk-PictureLink_ImageWrap">
            <img class="blk-PictureLink_Image" src="<?php echo $page_1_img_url; ?>" alt="<?php echo $page_1_title; ?>">
          </div>
          <img src="<?php echo get_stylesheet_directory_uri() . '/inc/img/mask-circle-1.svg'; ?>" alt="Circle Mask" class="blk-PictureLink_Mask">
        </div>
        <div class="blk-PictureLink_Footer">
          <h4 class="blk-PictureLink_Title"><?php echo $page_1_title; ?></h4>
        </div>
      </div>
    </li>

    <li class="blk-PictureLinks_Item">
      <div class="blk-PictureLink">
        <a class="blk-PictureLink_FauxLink" href="#"></a>
        <div class="blk-PictureLink_Body">
          <div class="blk-PictureLink_ImageWrap">
            <img class="blk-PictureLink_Image" src="<?php echo $page_1_img_url; ?>" alt="<?php echo $page_1_title; ?>">
          </div>
          <img src="<?php echo get_stylesheet_directory_uri() . '/inc/img/mask-circle-2.svg'; ?>" alt="Circle Mask" class="blk-PictureLink_Mask">
        </div>
        <div class="blk-PictureLink_Footer">
          <h4 class="blk-PictureLink_Title"><?php echo $page_1_title; ?></h4>
        </div>
      </div>
    </li>

    <li class="blk-PictureLinks_Item">
      <div class="blk-PictureLink">
        <a class="blk-PictureLink_FauxLink" href="#"></a>
        <div class="blk-PictureLink_Body">
          <div class="blk-PictureLink_ImageWrap">
            <img class="blk-PictureLink_Image" src="<?php echo $page_1_img_url; ?>" alt="<?php echo $page_1_title; ?>">
          </div>
          <img src="<?php echo get_stylesheet_directory_uri() . '/inc/img/mask-circle-3.svg'; ?>" alt="Circle Mask" class="blk-PictureLink_Mask">
        </div>
        <div class="blk-PictureLink_Footer">
          <h4 class="blk-PictureLink_Title"><?php echo $page_1_title; ?></h4>
        </div>
      </div>
    </li>

    <li class="blk-PictureLinks_Item">
      <div class="blk-PictureLink">
        <a class="blk-PictureLink_FauxLink" href="#"></a>
        <div class="blk-PictureLink_Body">
          <div class="blk-PictureLink_ImageWrap">
            <img class="blk-PictureLink_Image" src="<?php echo $page_1_img_url; ?>" alt="<?php echo $page_1_title; ?>">
          </div>
          <img src="<?php echo get_stylesheet_directory_uri() . '/inc/img/mask-circle-4.svg'; ?>" alt="Circle Mask" class="blk-PictureLink_Mask">
        </div>
        <div class="blk-PictureLink_Footer">
          <h4 class="blk-PictureLink_Title"><?php echo $page_1_title; ?></h4>
        </div>
      </div>
    </li>

  </ul>
</div>
