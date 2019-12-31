<?php
  $post_ID = get_the_ID();
  $post_categories = get_the_category();
  $country_data = get_the_terms($post_ID, 'country');

  // Get post thumbnail url, output as actual img element
?>

<article id="post-<?php echo $post_ID; ?>" class="crd-Team team-modal-trigger">
	<header class="crd-Team_Header">
    <?php
      if ( ! empty( $post_categories ) ) {
          echo '<span class="crd-Team_Badge">' . esc_html( $post_categories[0]->name ) . '</span>';
      }
    ?>
    <div class="crd-Team_Image" data-member-image>
      <?php the_post_thumbnail(); ?>
    </div>
	</header>
	<div class="crd-Team_Body">
		<div class="crd-Team_Content">
      <h3 class="crd-Team_Title" data-member-name><?php the_title(); ?></h3>
      <p class="crd-Team_JobTitle" data-member-jobtitle><?php echo get_field( "job_title" ); ?></p>
      <p class="crd-Team_Bio" data-member-bio><?php echo get_field( "bio" ); ?></p>
      <p class="crd-Team_Email" data-member-email><?php echo get_field( "email_address" ); ?></p>
      <p class="crd-Team_Location" data-member-location><?php echo $country_data[0]->name; ?></p>
		</div>
	</div>
  <a href="#" class="crd-Team_FauxLink"></a>
</article><!-- #post-## -->
