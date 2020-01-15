<?php
  /*
    Relevant Links Block
    For Single & Case Study Templates
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */
  $list_title = block_field( 'list-title', false );
?>

<div class="blk-RelevantLinks">
  <div class="blk-RelevantLinks_Container">
    <?php if ($list_title): ?>
      <div class="blk-RelevantLinks_Header">
        <h5 class="blk-RelevantLinks_Title"><?php echo $list_title; ?></h5>
      </div>
    <?php endif; ?>
    <div class="blk-RelevantLinks_Body">
      <ul class="blk-RelevantLinks_Items">
          <?php if ( block_rows( 'link' ) ) : while ( block_rows( 'link' ) ) : block_row( 'link' );?>
            <li class="blk-RelevantLinks_Item">

              <?php if ( block_sub_value( 'image' ) ) :
                $image = block_sub_value( 'image', false );
                $image_url = wp_get_attachment_image_src( $image, 'full-size' )[0];
                $image_alt = get_post_meta($image, '_wp_attachment_image_alt', TRUE); ?>
                <div class="blk-RelevantLinks_ImageWrap">
                  <img class="blk-RelevantLinks_Image" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" />
                </div>
              <?php endif;?>

              <?php if ( block_sub_value( 'heading' ) ) : ?>
                <h6 class="blk-RelevantLinks_Heading"><?php echo block_sub_value( 'heading' ); ?></h6>
              <?php endif;?>

              <?php if ( block_sub_value( 'text' ) ) : ?>
                <p class="blk-RelevantLinks_Text"><?php echo block_sub_value( 'text' ); ?></p>
              <?php endif;?>

              <?php if ( block_sub_value( 'url' ) ) : ?>
                <a class="blk-RelevantLinks_FauxLink" href="<?php echo block_sub_value( 'url' ); ?>"></a>
              <?php endif;?>

            </li>
          <?php endwhile;
            endif;
          reset_block_rows( 'link' ); ?>
      </ul>
    </div>
  </div>
</div>
