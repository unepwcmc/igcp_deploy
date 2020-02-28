<?php
  /*
    CTA Block
    Created by UNEP-WCMC
    With Block Lab for Gutenberg - https://getblocklab.com/
  */

  // Variables

  $title = block_field( 'title', false );
  $text = block_field( 'text', false );
  $background_image = block_field( 'background-image', false );
  $background_image_url = wp_get_attachment_image_src( $background_image, 'full-size' )[0];
  $opacity = block_field( 'opacity', false );

  $page_url = get_site_url() . $_SERVER['REQUEST_URI'];
  $socials = array('Facebook', 'Twitter', 'LinkedIn');
  $social_share_urls = array(
    'Facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . $page_url,
    'Twitter' => 'http://twitter.com/share?text=' . get_the_title() . '&url=' . $page_url,
    'LinkedIn' => 'https://www.linkedin.com/sharing/share-offsite/?url=' . $page_url
  )
?>

<div class="cta-Block cta-Block-share">
  <div class="cta-Block_Inner">
    <div class="cta-Block_Body">
      <div class="cta-Block_Content">
        <h3 class="cta-Block_Title"><?php echo $title; ?></h3>
        <p class="cta-Block_Text"><?php echo $text; ?></p>
        <ul class="cta-Block_Items">
          <?php foreach ($socials as $social) :
            $social_url = $social_share_urls[$social];
            if ($social_url != '') : ?>
              <li class="cta-Block_Item">
                <a class="cta-Block_Link" href="<?php echo $social_url; ?>" target="_blank" rel="noreferrer noopener" title="Share on <?php echo $social; ?>"><?php echo $social; ?></a>
              </li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
  <img src="<?php echo $background_image_url; ?>" alt="<?php echo $title; ?>" class="cta-Block_BackgroundImage">
  <div class="cta-Block_Overlay" style="opacity: <?php echo $opacity; ?>"></div>
</div>
