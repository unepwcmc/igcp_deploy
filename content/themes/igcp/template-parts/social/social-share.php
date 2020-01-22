<?php
  $page_url = get_site_url() . $_SERVER['REQUEST_URI'];
  $socials = array('email', 'facebook', 'twitter', 'linkedin', 'addthis');
  $social_share_urls = array(
    'email' => 'mailto:',
    'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . $page_url,
    'twitter' => 'http://twitter.com/share?text=' . get_the_title() . '&url=' . $page_url,
    'linkedin' => 'https://www.linkedin.com/sharing/share-offsite/?url=' . $page_url,
    // 'addthis' => '#'
  )
?>

<div class="soc-Social">
  <p class="soc-Social_Heading">Share:</p>
  <ul class="soc-Social_Icons">
    <?php foreach ($socials as $social) :
      $social_url = $social_share_urls[$social];
      if ($social_url != '') : ?>
        <li class="soc-Social_Icon">
          <a href="<?php echo $social_url; ?>" target="_blank" rel="noreferrer noopener">
            <?php get_template_part( 'template-parts/icons/icon', $social . '-share'); ?>
          </a>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>
</div>
