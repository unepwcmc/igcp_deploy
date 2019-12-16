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
<button class="nav-Header_Toggle" aria-controls="navigation" aria-expanded="false" data-drawer-menu-toggle>
	<svg aria-hidden="true" data-prefix="far" data-icon="bars" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="nav-Header_ToggleIcon">
		<path fill="currentColor" d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"/>
	</svg>
</button>
