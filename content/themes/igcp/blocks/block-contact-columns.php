<?php
  /*
    Contact Columns Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */
?>

<div class="blk-Contact_Columns">

  <?php if ( block_rows( 'contact' ) ) : while ( block_rows( 'contact' ) ) : block_row( 'contact' );?>
    <div class="blk-Contact_Column">

      <?php if ( block_sub_value( 'heading' ) ) : ?>
        <h4 class="blk-Contact_Heading"><?php echo block_sub_value( 'heading' ); ?></h4>
      <?php endif;?>

      <?php if ( block_sub_value( 'address' ) ) : ?>
        <div class="blk-Contact_Text">
          <?php echo block_sub_value( 'address' ); ?>
        </div>
      <?php endif;?>

      <?php if ( ( block_sub_value( 'phone' ) ) || ( block_sub_value( 'fax' ) ) || ( block_sub_value( 'email' ) ) ) : ?>
        <ul class="blk-Contact_Items">
          <?php if ( block_sub_value( 'phone' ) ): ?>
            <li class="blk-Contact_Item blk-Contact_Item-phone">
              <?php
                get_template_part( 'template-parts/icons/icon', 'phone' );
                echo block_sub_value( 'phone' );
              ?>
            </li>
          <?php endif; ?>
          <?php if ( block_sub_value( 'fax' ) ): ?>
            <li class="blk-Contact_Item blk-Contact_Item-fax">
              <?php
                get_template_part( 'template-parts/icons/icon', 'fax' );
                echo block_sub_value( 'fax' );
              ?>
            </li>
          <?php endif; ?>
          <?php if ( block_sub_value( 'email' ) ): ?>
            <li class="blk-Contact_Item blk-Contact_Item-email">
              <?php
                get_template_part( 'template-parts/icons/icon', 'email' );
                echo block_sub_value( 'email' );
              ?>
            </li>
          <?php endif; ?>
        </ul>
      <?php endif;?>

    </div>
  <?php endwhile; endif; reset_block_rows( 'contact' ); ?>

</div>
