<?php

/*-------------------------------------------------------------------------------------------------
Add Class to Body
------------------------------------------------------------------------------------------------- */

// Add specific CSS class by filter.

add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'lyt-Body' ) );
} );

/*-------------------------------------------------------------------------------------------------
Remove About Us
------------------------------------------------------------------------------------------------- */

function change_toolbar($wp_toolbar) {
	$wp_toolbar->remove_node('wp-logo');
}
add_action('admin_bar_menu', 'change_toolbar', 999);

/*-------------------------------------------------------------------------------------------------
Enqueue the Dashicons script
------------------------------------------------------------------------------------------------- */

function load_dashicons_front_end() {
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );

/*-------------------------------------------------------------------------------
GUTENBERG ADMIN SCRIPTS
-------------------------------------------------------------------------------*/

add_action( 'admin_enqueue_scripts', 'mscfp_admin_style' );
function mscfp_admin_style( $hook ) {
	   wp_enqueue_style( 'admin-gutenberg-style', get_stylesheet_directory_uri().'/inc/css/gutenberg.css' );
}

/*-------------------------------------------------------------------------------
Gutenberg Colour Pallet
-------------------------------------------------------------------------------*/

// primary & secondary colours from sass/utils/_variables cscc

add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Primary', 'colour-pallette' ),
		'slug'  => 'primary',
		'color' => '#204922',
	),
	array(
		'name'  => __( 'Secondary', 'colour-pallette' ),
		'slug'  => 'secondary',
		'color' => '#823e76',
	),
	array(
		'name'  => __( 'Black', 'colour-pallette' ),
		'slug'  => 'black',
		'color' => '#121212',
	),
	array(
		'name'  => __( 'White', 'colour-pallette' ),
		'slug'  => 'white',
		'color' => '#ffffff',
	),
	array(
		'name'  => __( 'Grey', 'colour-pallette' ),
		'slug'  => 'grey',
		'color' => '#f2f2f2',
	)
) );

// -- Disable Custom Colors
//add_theme_support( 'disable-custom-colors' );


/*-------------------------------------------------------------------------------------------------
SHOW ADMIN FOR EDITOR
------------------------------------------------------------------------------------------------- */

if (!current_user_can('edit_posts')) {
	add_filter('show_admin_bar', '__return_false');
}

/*-------------------------------------------------------------------------------------------------
REPLACE EXCERPT
------------------------------------------------------------------------------------------------- */

function new_excerpt_more($more) {
	   global $post;
	return '... ';
}
add_filter('excerpt_more', 'new_excerpt_more');


/*-------------------------------------------------------------------------------------------------
SETUP THEME
------------------------------------------------------------------------------------------------- */

add_action('after_setup_theme', 'custom_setup');


if (! function_exists('custom_setup')){

	function custom_setup() {

		global $wp_version, $wpdb;

		// Add styles for the visual editor
		add_editor_style();

		// Add default posts and comments RSS feed links to <head>.
		add_theme_support('automatic-feed-links');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menu('primary', __('Primary Menu', 'custom'));
		register_nav_menu('mobile', __('Mobile Menu', 'custom'));
		register_nav_menu('footer', __('Footer Menu', 'custom'));
		register_nav_menu('social', __('Social Menu', 'custom'));

		// Add support for Featured Images
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(250, 250, true);
		add_image_size('banner', 1920, 456, true); // Banner Image
		add_image_size('featured', 500, 350, true); // Featured Image
		add_image_size('small-featured', 400, 260, true); // Featured Image
		add_image_size('logo', 300, 300, false); // Featured Image
		add_image_size('featured-portrait', 350, 500, true); // Featured Image

		// Add sizes to media library
		add_filter( 'image_size_names_choose', 'dm_custom_sizes' );

		// Disable default gallery css styles
		add_filter( 'use_default_gallery_style', '__return_false' );

		if (is_admin()){


		} else {
			add_action('wp_enqueue_scripts', 'custom_load_js');
		}


	}
}

/*-------------------------------------------------------------------------------------------------
IS BLOG PAGE
------------------------------------------------------------------------------------------------- */
function is_blog () {
	global $post;
	$posttype = get_post_type($post );
	return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post') ) ? true : false ;
}

/*-------------------------------------------------------------------------------------------------
LOAD STYLES
------------------------------------------------------------------------------------------------- */

function custom_styles(){
    wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() . '/inc/css/main.css' );
    wp_enqueue_style( 'ie_css', get_stylesheet_directory_uri() . '/inc/css/ie.css' );
    wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap' );
    wp_enqueue_style( 'flickity', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );
}

add_action( 'wp_enqueue_scripts', 'custom_styles' );

/*-------------------------------------------------------------------------------------------------
LOAD JS
------------------------------------------------------------------------------------------------- */

function custom_load_js(){
	// Enqueue Javascript
	if(!is_admin()) {
		// wp_enqueue_script('custom-modernizr', get_stylesheet_directory_uri() . '/inc/js/vendor/modernizr-custom.3.6.0.js', array('jquery'));

		// wp_enqueue_script('smoothscroll-polyfill', get_stylesheet_directory_uri() . '/inc/js/utilities/smoothscroll-polyfill.js');

		// wp_enqueue_script('in-view', get_stylesheet_directory_uri() . '/inc/js/vendor/in-view.min.js');

    // wp_enqueue_script('objectfit-polyfill', get_stylesheet_directory_uri() . '/inc/js/utilities/objectfit-polyfill.js');

    // wp_enqueue_script('flickity', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js');

    wp_enqueue_script('custom-scripts', get_stylesheet_directory_uri() . '/inc/js/scripts.js', array('jquery'));
	}
}

/*-------------------------------------------------------------------------------------------------
SIDEBARS
------------------------------------------------------------------------------------------------- */

function custom_register_sidebar() {

	register_sidebar(array(
		'name' => __('Sidebar', 'custom'),
		'id' => 'sidebar',
		'before_widget' => '<li class="sbr-Widgets_Item"><div class="sbr-Widget sbr-Widget-%1$s sbr-Widget-%2$s">',
		'after_widget' => "</div></li>",
		'before_title' => '<h3 class="sbr-Widget_Title">',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => __('Header', 'custom'),
		'id' => 'header',
		'before_widget' => '<div class="hd-Widgets_Item"><aside class="hd-Widget hd-Widget-%1$s hd-Widget-%2$s">',
		'after_widget' => "</aside></div>",
		'before_title' => '<h3 class="hd-Widget_Title">',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => __('After Content', 'custom'),
		'id' => 'after-content',
		'before_widget' => '<div class="wgt-Widgets_Item"><aside class="wgt-Widget wgt-Widget-%1$s wgt-Widget-%2$s">',
		'after_widget' => "</aside></div>",
		'before_title' => '<h3 class="wgt-Widget_Title">',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => __('Footer', 'custom'),
		'id' => 'footer',
		'before_widget' => '<div class="ft-Widgets_Item ft-Widgets_Item-%1$s ft-Widgets_Item-%2$s"><aside class="ft-Widget ft-Widget-%1$s ft-Widget-%2$s">',
		'after_widget' => "</aside></div>",
		'before_title' => '<h3 class="ft-Widget_Title">',
		'after_title' => '</h3>'
	));
}

add_action('widgets_init', 'custom_register_sidebar');



/*-------------------------------------------------------------------------------------------------
EXCERPTS LENGTH & ADD
------------------------------------------------------------------------------------------------- */

// function custom_excerpt_length($length) {
// 	return 20;
// }
// add_filter('excerpt_length', 'custom_excerpt_length');

function custom_get_the_excerpt($length=100, $end=' ...') {
	$out = get_the_excerpt();
	if (strlen($out) > $length)
		$out = substr($out, 0, $length).$end;

	return $out;
}

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
	 add_post_type_support( 'page', 'excerpt' );
}

/*-------------------------------------------------------------------------------------------------
EXCERPT STRIP
------------------------------------------------------------------------------------------------- */

function excerpt_strip_tags( $content ) {
	return strip_tags($content);
}
add_filter( 'the_excerpt', 'excerpt_strip_tags' );



/*-------------------------------------------------------------------------------
Add sub pages
-------------------------------------------------------------------------------*/

// add hook
add_filter( 'wp_nav_menu_objects', 'my_wp_nav_menu_objects_sub_menu', 10, 2 );

// filter_hook function to react on sub_menu flag
function my_wp_nav_menu_objects_sub_menu( $sorted_menu_items, $args ) {
  if ( isset( $args->sub_menu ) ) {
	$root_id = 0;
	// find the current menu item
	foreach ( $sorted_menu_items as $menu_item ) {
	  if ( $menu_item->current ) {
		// set the root id based on whether the current menu item has a parent or not
	  $root_id = ( $menu_item->menu_item_parent ) ? $menu_item->menu_item_parent : $menu_item->ID;
	  break;
	}
  }
  // find the top level parent
  if ( ! isset( $args->direct_parent ) ) {
	$prev_root_id = $root_id;
	while ( $prev_root_id != 0 ) {
	  foreach ( $sorted_menu_items as $menu_item ) {
		if ( $menu_item->ID == $prev_root_id ) {
		  $prev_root_id = $menu_item->menu_item_parent;
		  // don't set the root_id to 0 if we've reached the top of the menu
		  if ( $prev_root_id != 0 ) $root_id = $menu_item->menu_item_parent;
			break;
		  }
		}
	  }
	}
	$menu_item_parents = array();
	foreach ( $sorted_menu_items as $key => $item ) {
	  // init menu_item_parents
	  if ( $item->ID == $root_id ) $menu_item_parents[] = $item->ID;

	  if ( in_array( $item->menu_item_parent, $menu_item_parents ) ) {
	  // part of sub-tree: keep!
		$menu_item_parents[] = $item->ID;
	  } else if ( ! ( isset( $args->show_parent ) && in_array( $item->ID, $menu_item_parents ) ) ) {
	  // not part of sub-tree: away with it!
	  unset( $sorted_menu_items[$key] );
	}
  }
return $sorted_menu_items;
} else {
  return $sorted_menu_items;
}
}

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

/*-------------------------------------------------------------------------------
Prevent WP from adding <p> tags on pages
-------------------------------------------------------------------------------*/
//
// function disable_wp_auto_p( $content ) {
//   if ( is_singular( 'page' ) ) {
//     remove_filter( 'the_content', 'wpautop' );
//     remove_filter( 'the_excerpt', 'wpautop' );
//   }
//   return $content;
// }
// add_filter( 'the_content', 'disable_wp_auto_p', 0 );

/*-------------------------------------------------------------------------------
// Function to add Posts by Category Widget
-------------------------------------------------------------------------------*/

function wpb_postsbycategory($atts = [], $content = null, $tag = '') {

	$atts = shortcode_atts([
		'cat_name' => 'category',
		'limit' => 5
	], $atts, $tag);

	// the query
	$the_query = new WP_Query( array( 'category_name' => $atts['cat_name'], 'posts_per_page' => (int)$atts['limit'] ) );

	$string = '';
	// The Loop
	$string .= '<ul class="postsbycategory widget_recent_entries">';
	if ( $the_query->have_posts() ) {
	  while ( $the_query->have_posts() ) {
	    $the_query->the_post();
	    $string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark" title="' . get_the_title() . '">' . get_the_title() .'</a></li>';
	  }
	} else {
	  // no posts found
		$string .= '<li><p>No Posts found for category: ' . $atts['cat_name'] . '</p></li>';
	}
	$string .= '</ul>';

	return $string;

	/* Restore original Post Data */
	wp_reset_postdata();
}
// Add a shortcode
add_shortcode('categoryposts', 'wpb_postsbycategory');

// [categoryposts limit="5" cat_name=""]

// Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');

/*-------------------------------------------------------------------------------
// Remove Archive Labels
-------------------------------------------------------------------------------*/

add_filter( 'get_the_archive_title', 'my_theme_archive_title' );
/**
 * Remove archive labels.
 *
 * @param  string $title Current archive title to be displayed.
 * @return string        Modified archive title to be displayed.
 */
function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }

    return $title;
}

/*-------------------------------------------------------------------------------
	Disable gutenberg for FAQ post types
-------------------------------------------------------------------------------*/

add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
    // Use your post type key instead of 'product'
    if ($post_type === 'faq') return false;
    return $current_status;
}

/*-------------------------------------------------------------------------------
	Add wrapper around header menu UL
-------------------------------------------------------------------------------*/

/* EXTEND SUBNAV
******************************************/

class submenuWrap extends Walker_Nav_Menu {
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<div class='nav-Header_SubMenu'><ul class='sub-menu'>\n";
  }
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul></div>\n";
  }
}

/*-------------------------------------------------------------------------------
	Remove P tags from Contact Form 7
-------------------------------------------------------------------------------*/

add_filter('wpcf7_autop_or_not', '__return_false');

/*-------------------------------------------------------------------------------
	Pagination Bar
-------------------------------------------------------------------------------*/

function pagination_bar() {
  global $wp_query;

  $total_pages = $wp_query->max_num_pages;

  if ($total_pages > 1){
    $current_page = max(1, get_query_var('paged'));

		echo '<div class="pag-Pagination_Bar">';
			echo '<div class="pag-Pagination_Nav">';

        global $template;
        // structure of "format" depends on whether we're using pretty permalinks
        basename( $template ) === 'search.php' ? $format = '&paged=%#%' : $format = 'page/%#%/';

  		  echo paginate_links(array(
          'base' => get_pagenum_link(1) . '%_%',
          'format' => $format,
          'current' => $current_page,
          'total' => $total_pages,
          'prev_next' => True,
          'prev_text' => __('<div class="pag-Pagination_Number">&laquo;</div>'),
          'next_text' => __('<div class="pag-Pagination_Number">&raquo;</div>'),
          'before_page_number' => '<div class="pag-Pagination_Number">',
          'after_page_number' => '</div>'
  	    ));

			echo '</div>';
		echo '</div>';
  }
}

/*-------------------------------------------------------------------------------------------------
  Filter search results
------------------------------------------------------------------------------------------------- */
function searchfilter($query) {

  if ($query->is_search && !is_admin() ) {
    $query->set('post_type',array('post','page','families','library_file',''));
  }

  return $query;
}

add_filter('pre_get_posts','searchfilter');

/*-------------------------------------------------------------------------------------------------
IMPORT CUSTOMIZER SETTINGS
------------------------------------------------------------------------------------------------- */
require_once( 'customizer-settings.php' );
