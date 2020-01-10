<?php
  /*
    Stats Block
    For Case Study Page Template
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */
?>

<div class="cst-Stats">
  <div class="cst-Stats_Body">
    <ul class="cst-Stats_Items">
      <?php if ( block_rows( 'statistic' ) ) : while ( block_rows( 'statistic' ) ) : block_row( 'statistic' );?>
        <li class="cst-Stats_Item">
          <?php if ( block_sub_value( 'heading' ) ) : ?>
            <h5 class="cst-Stats_Heading"><?php echo block_sub_value( 'heading' ); ?></h5>
          <?php endif;?>

          <?php if ( block_sub_value( 'text' ) ) : ?>
            <p class="cst-Stats_Text"><?php echo block_sub_value( 'text' ); ?></p>
          <?php endif;?>
        </li>
      <?php endwhile; endif; reset_block_rows( 'statistic' ); ?>
    </ul>
  </div>
</div>
