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
  $image_1 = block_field( 'image-1', false );
  $image_1_src = wp_get_attachment_image_src( $image_1, 'full-size' )[0];
  $image_2 = block_field( 'image-2', false );
  $image_2_src = wp_get_attachment_image_src( $image_2, 'full-size' )[0];
  $block_quote = block_field( 'block-quote', false );
?>

<div class="abt-Gorillas">
  <?php get_template_part( 'template-parts/components/family-stats' ); ?>
  <h3 class="abt-Gorillas_Title"><?php echo $title; ?></h3>
  <p class="abt-Gorillas_Text"><?php echo $text; ?></p>
  <div class="abt-Gorillas_Images <?php if ($image_1 != '' && $image_2 != '') echo ' abt-Gorillas_Images-flex'; ?>">
    <div class="abt-Gorillas_Image">
      <div class="abt-Gorillas_ImageWrap">
        <img src="<?php echo $image_1_src; ?>" alt="<?php echo $title; ?>">
      </div>
    </div>
    <div class="abt-Gorillas_Image">
      <div class="abt-Gorillas_ImageWrap">
        <img src="<?php echo $image_2_src; ?>" alt="<?php echo $title; ?>">
      </div>
    </div>
  </div>
  <blockquote class="abt-Gorillas_Quote">
    <p class="abt-Gorillas_QuoteText"><?php echo $block_quote; ?></p>
  </blockquote>
</div>
