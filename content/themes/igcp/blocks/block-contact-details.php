<?php
  /*
    Contact Details Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */
  $heading = get_theme_mod( 'contact_details_heading' );
  $address = get_theme_mod( 'contact_details_address' );
  $phone = get_theme_mod( 'contact_details_phone' );
  $email = get_theme_mod( 'contact_details_email' );

?>

<div class="blk-Contact">
  <div class="blk-Contact_Body">
    <div class="blk-Contact_Content">

      <?php if ( $heading ) : ?>
        <h4 class="blk-Contact_Heading"><?php echo $heading; ?></h4>
      <?php endif;?>

      <?php if ( $address ) : ?>
        <div class="blk-Contact_Text">
          <?php echo nl2br($address); ?>
        </div>
      <?php endif;?>

      <?php if ( ( $phone ) || ( $email ) ) : ?>
        <ul class="blk-Contact_Items">
          <?php if ( $phone ): ?>
            <li class="blk-Contact_Item blk-Contact_Item-phone">
              <?php
                get_template_part( 'template-parts/icons/icon', 'phone' );
                echo $phone;
              ?>
            </li>
          <?php endif; ?>
          <?php if ( $email ): ?>
            <li class="blk-Contact_Item blk-Contact_Item-email">
              <?php
                get_template_part( 'template-parts/icons/icon', 'email' );
                echo $email;
              ?>
            </li>
          <?php endif; ?>
        </ul>
      <?php endif;?>

    </div>
  </div>
</div>
