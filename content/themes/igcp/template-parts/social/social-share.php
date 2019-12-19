<?php
  $page_url = get_site_url() . $_SERVER['REQUEST_URI'];
  $socials = array('facebook', 'twitter', 'instagram', 'linkedin', 'youtube');
  $social_share_urls = array(
    'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . $page_url,
    'twitter' => 'http://twitter.com/share?text=' . get_the_title() . '&url=' . $page_url,
  )
?>


<p>Share:</p>
<ul class="soc-Social_Icons">
  <?php foreach ($socials as $social) :
    $social_url = $social_share_urls[$social];
    if ($social_url !== '') : ?>
      <li class="soc-Social_Icon">
        <a href="<?php echo $social_url; ?>" target="_blank" rel="noreferrer noopener">
          <?php get_template_part( 'template-parts/icons/icon', $social ); ?>
        </a>
      </li>
    <?php endif; ?>
  <?php endforeach; ?>
</ul>
