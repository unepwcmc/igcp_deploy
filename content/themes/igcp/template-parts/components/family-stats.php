<?php
  $gorillas = get_field('number_of_gorillas');
  $gorilla_types = array(
    array(
      'name' => 'Silverbacks',
      'count' => $gorillas['silverbacks'] != '' ? $gorillas['silverbacks'] : '00'
    ),
    array(
      'name' => 'Adult females',
      'count' => $gorillas['adult_females'] != '' ? $gorillas['adult_females'] : '00'
    ),
    array(
      'name' => 'Blackbacks',
      'count' => $gorillas['blackbacks'] != '' ? $gorillas['blackbacks'] : '00'
    ),
    array(
      'name' => 'Sub-adult females',
      'count' => $gorillas['sub-adult_females'] != '' ? $gorillas['sub-adult_females'] : '00'
    ),
    array(
      'name' => 'Juveniles',
      'count' => $gorillas['juveniles'] != '' ? $gorillas['juveniles'] : '00'
    ),
    array(
      'name' => 'Infants',
      'count' => $gorillas['infants'] != '' ? $gorillas['infants'] : '00'
    )
  );
  // $gorilla_types = ['Silverbacks', 'Adult females', 'Blackbacks', 'Sub-adult females', 'Juveniles', 'Infants'];
?>

<div class="sts-Family">
  <div class="sts-Family_Inner">
    <div class="sts-Family_Body">
      <ul class="sts-Family_Items">

        <?php foreach ($gorilla_types as $gorilla_type) :  ?>

          <li class="sts-Family_Item sts-Family_Item-<?php echo str_replace(' ', '-', strtolower($gorilla_type['name'])); ?>">
            <div class="sts-Family_Icon">
              <?php if ($gorilla_type['name'] == 'Silverbacks') : ?>
                <?php get_template_part( 'template-parts/icons/icon', 'silverback' ); ?>
              <?php else : ?>
                <?php get_template_part( 'template-parts/icons/icon', 'gorilla' ); ?>
              <?php endif; ?>
            </div>
            <div class="sts-Family_Content">
              <p class="sts-Family_Text sts-Family_Text-large"><?php echo $gorilla_type['count']; ?></p>
              <p class="sts-Family_Text"><?php echo $gorilla_type['name']; ?></p>
            </div>
          </li>

        <?php endforeach; ?>

      </ul>
    </div>
  </div>
</div>
