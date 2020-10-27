<?php
  /*
    About Gorillas Block
    For Family Page Template
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  // Variables

  $title = block_field( 'title', false );
  $text = block_field( 'text', false );
  $block_quote = block_field( 'block-quote', false );
?>

<div class="abt-Gorillas">
  <?php get_template_part( 'template-parts/components/family-stats' ); ?>
  <h3 class="abt-Gorillas_Title"><?php echo $title; ?></h3>
  <p class="abt-Gorillas_Text"><?php echo $text; ?></p>
  <blockquote class="abt-Gorillas_Quote">
    <p class="abt-Gorillas_QuoteText"><?php echo $block_quote; ?></p>
  </blockquote>
</div>
