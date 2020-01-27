<?php
  /*
    Picture Links Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */

  $section_title = block_field( 'section-title', false );

  // Link 1
  $link_1_title = block_field( 'link-1-title', false );
  $link_1_url = block_field( 'link-1-url', false );
  $link_1_image = block_field( 'link-1-image', false );
  $link_1_image_url = $link_1_image != '' ? wp_get_attachment_image_src( $link_1_image, 'full-size' )[0] : get_stylesheet_directory_uri() . '/inc/img/square-placeholder.jpg';

  // Link 2
  $link_2_title = block_field( 'link-2-title', false );
  $link_2_url = block_field( 'link-2-url', false );
  $link_2_image = block_field( 'link-2-image', false );
  $link_2_image_url = $link_2_image != '' ? wp_get_attachment_image_src( $link_2_image, 'full-size' )[0] : get_stylesheet_directory_uri() . '/inc/img/square-placeholder.jpg';

  // Link 3
  $link_3_title = block_field( 'link-3-title', false );
  $link_3_url = block_field( 'link-3-url', false );
  $link_3_image = block_field( 'link-3-image', false );
  $link_3_image_url = $link_3_image != '' ? wp_get_attachment_image_src( $link_3_image, 'full-size' )[0] : get_stylesheet_directory_uri() . '/inc/img/square-placeholder.jpg';

  // Link 4
  $link_4_title = block_field( 'link-4-title', false );
  $link_4_url = block_field( 'link-4-url', false );
  $link_4_image = block_field( 'link-4-image', false );
  $link_4_image_url = $link_4_image != '' ? wp_get_attachment_image_src( $link_4_image, 'full-size' )[0] : get_stylesheet_directory_uri() . '/inc/img/square-placeholder.jpg';
?>

<div class="blk-PictureLinks">
  <div class="blk-PictureLinks_Header">
    <h3 class="blk-PictureLinks_Title"><?php echo $section_title; ?></h3>
  </div>
  <div class="blk-PictureLinks_Body">
    <ul class="blk-PictureLinks_Items">

      <li class="blk-PictureLinks_Item">
        <div class="blk-PictureLink">
          <a class="blk-PictureLink_FauxLink" href="<?php echo $link_1_url; ?>"><?php echo $link_1_title; ?></a>
          <div class="blk-PictureLink_Body">
            <div class="blk-PictureLink_ImageWrap">
              <img class="blk-PictureLink_Image" src="<?php echo $link_1_image_url; ?>" alt="<?php echo $link_1_title; ?>">
            </div>
            <img src="<?php echo get_stylesheet_directory_uri() . '/inc/img/mask-circle-1.svg'; ?>" alt="Circle Mask" class="blk-PictureLink_Mask">
          </div>
          <div class="blk-PictureLink_Footer">
            <h4 class="blk-PictureLink_Title"><?php echo $link_1_title; ?></h4>
          </div>
        </div>
      </li>

      <li class="blk-PictureLinks_Item">
        <div class="blk-PictureLink">
          <a class="blk-PictureLink_FauxLink" href="<?php echo $link_2_url; ?>"><?php echo $link_2_title; ?></a>
          <div class="blk-PictureLink_Body">
            <div class="blk-PictureLink_ImageWrap">
              <img class="blk-PictureLink_Image" src="<?php echo $link_2_image_url; ?>" alt="<?php echo $link_2_title; ?>">
            </div>
            <img src="<?php echo get_stylesheet_directory_uri() . '/inc/img/mask-circle-2.svg'; ?>" alt="Circle Mask" class="blk-PictureLink_Mask">
          </div>
          <div class="blk-PictureLink_Footer">
            <h4 class="blk-PictureLink_Title"><?php echo $link_2_title; ?></h4>
          </div>
        </div>
      </li>

      <li class="blk-PictureLinks_Item">
        <div class="blk-PictureLink">
          <a class="blk-PictureLink_FauxLink" href="<?php echo $link_3_url; ?>"><?php echo $link_3_title; ?></a>
          <div class="blk-PictureLink_Body">
            <div class="blk-PictureLink_ImageWrap">
              <img class="blk-PictureLink_Image" src="<?php echo $link_3_image_url; ?>" alt="<?php echo $link_3_title; ?>">
            </div>
            <img src="<?php echo get_stylesheet_directory_uri() . '/inc/img/mask-circle-3.svg'; ?>" alt="Circle Mask" class="blk-PictureLink_Mask">
          </div>
          <div class="blk-PictureLink_Footer">
            <h4 class="blk-PictureLink_Title"><?php echo $link_3_title; ?></h4>
          </div>
        </div>
      </li>

      <li class="blk-PictureLinks_Item">
        <div class="blk-PictureLink">
          <a class="blk-PictureLink_FauxLink" href="<?php echo $link_4_url; ?>"><?php echo $link_4_title; ?></a>
          <div class="blk-PictureLink_Body">
            <div class="blk-PictureLink_ImageWrap">
              <img class="blk-PictureLink_Image" src="<?php echo $link_4_image_url; ?>" alt="<?php echo $link_4_title; ?>">
            </div>
            <img src="<?php echo get_stylesheet_directory_uri() . '/inc/img/mask-circle-4.svg'; ?>" alt="Circle Mask" class="blk-PictureLink_Mask">
          </div>
          <div class="blk-PictureLink_Footer">
            <h4 class="blk-PictureLink_Title"><?php echo $link_4_title; ?></h4>
          </div>
        </div>
      </li>

    </ul>
  </div>
</div>
