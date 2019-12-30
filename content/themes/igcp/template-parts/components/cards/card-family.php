<?php
  $park_data = get_the_terms(get_the_ID(), 'park');
  $park_name = $park_data[0]->name;
?>

<article id="post-<?php the_ID(); ?>" class="crd-Family">
	<header class="crd-Family_Header">
    <?php
      if ( ! empty( $park_name != '' ) ) {
          echo '<span class="crd-Family_Badge">' . $park_name . '</span>';
      }
    ?>
    <div class="crd-Family_Image">
      <?php the_post_thumbnail(); ?>
    </div>
	</header>
	<div class="crd-Family_Body">
		<div class="crd-Family_Content">
      <h3 class="crd-Family_Title"><?php the_title(); ?></h3>
      <p class="crd-Family_Members"><?php get_template_part('template-parts/icons/icon', 'gorilla'); ?><?php echo get_field( "number_of_members" ); ?> Members</p>
		</div>
	</div>
</article><!-- #post-## -->
