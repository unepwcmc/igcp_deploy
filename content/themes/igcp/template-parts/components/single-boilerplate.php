<?php
  /* Variables */
  $text = get_theme_mod( 'blog_posts_boilerplate' );
?>

<?php if ($text): ?>
  <div class="art-Boilerplate">
    <div class="art-Boilerplate_Text">
      <?php echo $text; ?>
    </div>
  </div>
<?php endif; ?>
