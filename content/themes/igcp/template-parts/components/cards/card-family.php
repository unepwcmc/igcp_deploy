<?php
  $park_data = get_the_terms(get_the_ID(), 'park');
  $park_name = $park_data[0]->name;

  $thumbnail_url = get_the_post_thumbnail_url() != '' ? get_the_post_thumbnail_url() : get_stylesheet_directory_uri() . '/inc/img/card-placeholder.jpg';

  $members = get_field( "number_of_members" );
?>

<article id="post-<?php the_ID(); ?>" class="crd-Card crd-Card-family">
	<header class="crd-Card_Header">
    <?php
      if ( ! empty( $park_name != '' ) ) {
          echo '<span class="crd-Card_Badge">' . $park_name . '</span>';
      }
    ?>
    <div class="crd-Card_Image">
      <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" />
    </div>
	</header>
	<div class="crd-Card_Body">
		<div class="crd-Card_Content">
      <h3 class="crd-Card_Title"><?php the_title(); ?></h3>
      <?php if ($members != ''): ?>
        <p class="crd-Card_Members"><?php get_template_part('template-parts/icons/icon', 'gorilla'); ?><?php echo $members; ?> Members</p>
      <?php endif; ?>
		</div>
	</div>
  <a class="crd-Card_FauxLink" href="<?php the_permalink(); ?>"></a>
</article><!-- #post-## -->
