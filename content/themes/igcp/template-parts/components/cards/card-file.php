<?php
  $filetype_data = get_the_terms(get_the_ID(), 'file_type');
  $filetype_name = $filetype_data[0]->name;
  $thumbnail_url = get_the_post_thumbnail_url() != '' ? get_the_post_thumbnail_url() : get_stylesheet_directory_uri() . '/inc/img/square-placeholder.jpg';
?>

<article id="post-<?php echo $post_ID; ?>" class="crd-File">
	<header class="crd-File_Header">
    <?php
      if ( ! empty( $filetype_name != '' ) ) {
          echo '<span class="crd-Family_Badge">' . $filetype_name . '</span>';
      }
    ?>
    <div class="crd-File_Image">
      <img src="<?php echo $thumbnail_url; ?>" alt="<?php the_title(); ?>" />
    </div>
	</header>
	<div class="crd-File_Body">
		<div class="crd-File_Content">
      <h3 class="crd-File_Title"><?php the_title(); ?></h3>
      <div class="crd-File_Columns">
        <div class="crd-File_Column">
          <p class="crd-File_Link">View</p>
        </div>
        <div class="crd-File_Column">
          <div class="crd-File_Icon"><?php get_template_part( 'template-parts/icons/icon',  $filetype_data[0]->slug ); ?></div>
        </div>
      </div>
		</div>
	</div>
  <a href="<?php echo get_field( 'file' ); ?>" class="crd-File_FauxLink"></a>
</article><!-- #post-## -->
