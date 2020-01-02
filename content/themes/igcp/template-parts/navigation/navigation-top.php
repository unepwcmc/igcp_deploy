<?php
/**
* Displays top navigation
**/
?>

<!-- navigation  -->

<nav class="nav-Header" aria-hidden="true">
	<?php wp_nav_menu( array(
    'theme_location' => 'primary',
    'walker' => new submenuWrap()
  ) ); ?>
</nav>
