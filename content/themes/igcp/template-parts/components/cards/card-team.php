<?php
  $role_data = get_the_terms(get_the_ID(), 'role');
  $role_name = $role_data[0]->name;
  $location_data = get_the_terms(get_the_ID(), 'location');
  $location_name = $location_data[0]->name;
  $thumbnail_url = get_the_post_thumbnail_url() != '' ? get_the_post_thumbnail_url() : get_stylesheet_directory_uri() . '/inc/img/card-placeholder.jpg';
?>

<article id="post-<?php echo $post_ID; ?>" class="crd-Card crd-Card-team team-modal-trigger">
	<header class="crd-Card_Header">
    <?php
      if ( ! empty( $role_name != '' ) ) {
          echo '<span class="crd-Card_Badge">' . $role_name . '</span>';
      }
    ?>
    <div class="crd-Card_Image" data-member-image>
      <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" />
    </div>
	</header>
	<div class="crd-Card_Body">
		<div class="crd-Card_Content">
      <h3 class="crd-Card_Title" data-member-name><?php the_title(); ?></h3>
      <p class="crd-Card_JobTitle" data-member-jobtitle><?php echo get_field( "job_title" ); ?></p>
      <p class="crd-Card_Bio" data-member-bio><?php echo get_field( "bio" ); ?></p>
      <p class="crd-Card_Email" data-member-email><?php echo get_field( "email_address" ); ?></p>
      <p class="crd-Card_Location" data-member-location><?php echo $location_name; ?></p>
		</div>
	</div>
  <a href="#" class="crd-Card_FauxLink" title="Learn more about <?php the_title(); ?>"></a>
</article><!-- #post-## -->
