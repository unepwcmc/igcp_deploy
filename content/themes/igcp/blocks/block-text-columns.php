<?php
  /*
    Text Columns Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */
  $section_title = block_field( 'section-title', false);

  $heading_1 = block_field( 'heading-1', false );
  $text_1 = block_field( 'text-1', false );
  $link_text_1 = block_field( 'link-text-1', false );
  $link_url_1 = block_field( 'link-url-1', false );

  $heading_2 = block_field( 'heading-2', false );
  $text_2 = block_field( 'text-2', false );
  $link_text_2 = block_field( 'link-text-2', false );
  $link_url_2 = block_field( 'link-url-2', false );

  $heading_3 = block_field( 'heading-3', false );
  $text_3 = block_field( 'text-3', false );
  $link_text_3 = block_field( 'link-text-3', false );
  $link_url_3 = block_field( 'link-url-3', false );

  $heading_4 = block_field( 'heading-4', false );
  $text_4 = block_field( 'text-4', false );
  $link_text_4 = block_field( 'link-text-4', false );
  $link_url_4 = block_field( 'link-url-4', false );
?>

<div class="blk-TextColumns">
  <?php if ($section_title != ''): ?>
    <div class="blk-TextColumns_Header">
      <h3 class="blk-TextColumns_Title"><?php echo $section_title; ?></h3>
    </div>
  <?php endif; ?>
  <div class="blk-TextColumns_Body">
    <ul class="blk-TextColumns_Columns">

      <li class="blk-TextColumns_Column">
        <h4 class="blk-TextColumns_Heading"><?php echo $heading_1; ?></h4>
        <p class="blk-TextColumns_Text"><?php echo $text_1; ?></p>
        <a href="<?php echo $link_url_1; ?>" class="blk-TextColumns_Link" title="Visit the <?php echo $heading_1; ?> page"><?php echo $link_text_1; ?></a>
      </li>

      <li class="blk-TextColumns_Column">
        <h4 class="blk-TextColumns_Heading"><?php echo $heading_2; ?></h4>
        <p class="blk-TextColumns_Text"><?php echo $text_2; ?></p>
        <a href="<?php echo $link_url_2; ?>" class="blk-TextColumns_Link" title="Visit the <?php echo $heading_2; ?> page"><?php echo $link_text_2; ?></a>
      </li>

      <li class="blk-TextColumns_Column">
        <h4 class="blk-TextColumns_Heading"><?php echo $heading_3; ?></h4>
        <p class="blk-TextColumns_Text"><?php echo $text_3; ?></p>
        <a href="<?php echo $link_url_3; ?>" class="blk-TextColumns_Link" title="Visit the <?php echo $heading_3; ?> page"><?php echo $link_text_3; ?></a>
      </li>

      <li class="blk-TextColumns_Column">
        <h4 class="blk-TextColumns_Heading"><?php echo $heading_4; ?></h4>
        <p class="blk-TextColumns_Text"><?php echo $text_4; ?></p>
        <a href="<?php echo $link_url_4; ?>" class="blk-TextColumns_Link" title="Visit the <?php echo $heading_4; ?> page"><?php echo $link_text_4; ?></a>
      </li>

    </ul>
  </div>
</div>
