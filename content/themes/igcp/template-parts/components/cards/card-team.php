<?php
  $role_data = get_the_terms(get_the_ID(), 'role');
  $role_name = $role_data[0]->name;
  $thumbnail_url = get_the_post_thumbnail_url() != '' ? get_the_post_thumbnail_url() : get_stylesheet_directory_uri() . '/inc/img/square-placeholder.jpg';
?>

<article id="post-<?php echo $post_ID; ?>" class="crd-Team team-modal-trigger">
	<header class="crd-Team_Header">
    <?php
      if ( ! empty( $role_name != '' ) ) {
          echo '<span class="crd-Family_Badge">' . $role_name . '</span>';
      }
    ?>
    <div class="crd-Team_Image" data-member-image>
      <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" />
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
