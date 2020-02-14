<?php
  /*
    Donation Tiles Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  /* Variables */
  $gorilla_types = ['Silverbacks', 'Adult females', 'Blackbacks', 'Sub-adult females', 'Juveniles', 'Infants'];
?>


<div class="blk-FamilyStats">
  <div class="blk-FamilyStats_Inner">
    <div class="blk-FamilyStats_Body">
      <ul class="blk-FamilyStats_Items">

        <?php foreach ($gorilla_types as $gorilla_type) :  ?>

          <li class="blk-FamilyStats_Item">
            <div class="blk-FamilyStats_Icon">
              <?php if ($gorilla_type == 'Silverbacks') : ?>
                <?php get_template_part( 'template-parts/icon/icon', 'silverback' ); ?>
              <?php else; ?>
                <?php get_template_part( 'template-parts/icon/icon', 'gorilla' ); ?>
              <?php endif; ?>
            </div>
            <div class="blk-FamilyStats_Content">
              <p class="blk-FamilyStats_Text blk-FamilyStats_Text-large">06</p>
              <p class="blk-FamilyStats_Text"><?php echo $gorilla_type; ?></p>
            </div>
          </li>

        <?php endforeach; ?>

      </ul>
    </div>
  </div>
</div>
