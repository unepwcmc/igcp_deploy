<?php
  $park_data = get_the_terms( get_the_id(), 'park' );
  $term_ID = 'park_' . $park_data[0]->term_id;

  $park_name = $park_data[0]->name;
  $park_description = $park_data[0]->description;
  $park_map_image = get_field('map', $term_ID);
  $park_map_image_url = $park_map_image['url'];
?>


<div class="sec-Info">
  <div class="sec-Info_Columns">
    <div class="sec-Info_Column">
      <div class="sec-Info_ImageWrap">
        <img class="sec-Info_Image" src="<?php echo $park_map_image_url; ?>" alt="<?php echo $park_name; ?>">
      </div>
    </div>
    <div class="sec-Info_Column">
      <div class="sec-Info_Content">
        <h4><?php echo $park_name; ?></h4>
        <p><?php echo $park_description; ?></p>
      </div>
      <div class="sec-Info_ImageStrip" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/inc/img/pattern-bar-grey.png');"></div>
    </div>
  </div>
</div>
