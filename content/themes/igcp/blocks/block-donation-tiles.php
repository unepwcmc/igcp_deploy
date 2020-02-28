<?php
  /*
    Donation Tiles Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */
  $image_1 = block_field( 'image-1', false );
  $image_url_1 = wp_get_attachment_image_src( $image_1, 'full-size' )[0];
  $heading_1 = block_field( 'heading-1', false );
  $text_1 = block_field( 'text-1', false );
  $link_url_1 = block_field( 'link-url-1', false );

  $image_2 = block_field( 'image-2', false );
  $image_url_2 = wp_get_attachment_image_src( $image_2, 'full-size' )[0];
  $heading_2 = block_field( 'heading-2', false );
  $text_2 = block_field( 'text-2', false );
  $link_url_2 = block_field( 'link-url-2', false );

  $image_3 = block_field( 'image-3', false );
  $image_url_3 = wp_get_attachment_image_src( $image_3, 'full-size' )[0];
  $heading_3 = block_field( 'heading-3', false );
  $text_3 = block_field( 'text-3', false );
  $link_url_3 = block_field( 'link-url-3', false );

  $image_4 = block_field( 'image-4', false );
  $image_url_4 = wp_get_attachment_image_src( $image_4, 'full-size' )[0];
  $heading_4 = block_field( 'heading-4', false );
  $text_4 = block_field( 'text-4', false );
  $link_url_4 = block_field( 'link-url-4', false );
?>

<div class="til-Donation">
  <div class="til-Donation_Tiles">
    <div class="til-Donation_Items">

      <div class="til-Donation_Item">
        <div class="til-Donation_Tile">
          <div class="til-Donation_ImageWrap">
            <img class="til-Donation_Image" src="<?php echo $image_url_1; ?>" alt="<?php echo $heading_1; ?>">
          </div>
          <div class="til-Donation_Content">
            <h3 class="til-Donation_Heading"><?php echo $heading_1; ?></h3>
            <p class="til-Donation_Text"><?php echo $text_1; ?></p>
          </div>
          <a href="<?php echo $link_url_1 ?>" class="til-Donation_FauxLink" title="<?php echo $heading_1; ?>"></a>
        </div>
      </div>

      <div class="til-Donation_Item">
        <div class="til-Donation_Tile">
          <div class="til-Donation_ImageWrap">
            <img class="til-Donation_Image" src="<?php echo $image_url_2; ?>" alt="<?php echo $heading_2; ?>">
          </div>
          <div class="til-Donation_Content">
            <h3 class="til-Donation_Heading"><?php echo $heading_2; ?></h3>
            <p class="til-Donation_Text"><?php echo $text_2; ?></p>
          </div>
          <a href="<?php echo $link_url_2 ?>" class="til-Donation_FauxLink" title="<?php echo $heading_2; ?>"></a>
        </div>
      </div>

      <div class="til-Donation_Item">
        <div class="til-Donation_Tile">
          <div class="til-Donation_ImageWrap">
            <img class="til-Donation_Image" src="<?php echo $image_url_3; ?>" alt="<?php echo $heading_3; ?>">
          </div>
          <div class="til-Donation_Content">
            <h3 class="til-Donation_Heading"><?php echo $heading_3; ?></h3>
            <p class="til-Donation_Text"><?php echo $text_3; ?></p>
          </div>
          <a href="<?php echo $link_url_3 ?>" class="til-Donation_FauxLink" title="<?php echo $heading_3; ?>"></a>
        </div>
      </div>

      <div class="til-Donation_Item">
        <div class="til-Donation_Tile">
          <div class="til-Donation_ImageWrap">
            <img class="til-Donation_Image" src="<?php echo $image_url_4; ?>" alt="<?php echo $heading_4; ?>">
          </div>
          <div class="til-Donation_Content">
            <h3 class="til-Donation_Heading"><?php echo $heading_4; ?></h3>
            <p class="til-Donation_Text"><?php echo $text_4; ?></p>
          </div>
          <a href="<?php echo $link_url_4 ?>" class="til-Donation_FauxLink" title="<?php echo $heading_4; ?>"></a>
        </div>
      </div>

    </div>
  </div>
</div>
