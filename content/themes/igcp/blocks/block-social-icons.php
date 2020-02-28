<?php
  /*
    Social Icons Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */
?>

<?php $socials = array('facebook', 'twitter', 'instagram', 'linkedin', 'youtube'); ?>

<ul class="soc-Social_Icons">

  <?php foreach ($socials as $social) :
    $social_url = get_theme_mod( $social . '_url', false );
    if ($social_url != '') : ?>
      <li class="soc-Social_Icon">
        <a href="<?php echo $social_url; ?>" target="_blank" rel="noreferrer noopener" title="Visit our <?php echo $social; ?> page">
          <?php get_template_part( 'template-parts/icons/icon', $social ); ?>
        </a>
      </li>
    <?php endif; ?>
  <?php endforeach; ?>

</ul>
