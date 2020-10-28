<?php
/**
 * Customeriser Settings
 *
 * @link https://developer.wordpress.org/themes/customize-api/
 *
 */

/*-------------------------------------------------------------------------------
	Remove Unnecessary Settings
-------------------------------------------------------------------------------*/

function remove_customizer_settings() {
  global $wp_customize;

  $wp_customize->remove_panel( 'themes' ); // Theme change settings
  // $wp_customize->remove_section( 'title_tagline' ); // Site Identity
  $wp_customize->remove_panel( 'nav_menus' ); // Menus
  $wp_customize->remove_section( 'widgets' ); // Widgets
  $wp_customize->remove_section( 'static_front_page' ); // Homepage Settings
  $wp_customize->remove_section( 'custom_css' ); // Additional CSS

  $wp_customize->add_panel( 'heroes',
   array(
      'title' => __( 'Hero Settings' ),
      'description' => esc_html__( 'Adjust your Hero settings.' ),
      'priority' => 100, // Not typically needed. Default is 160
      'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
      'theme_supports' => '', // Rarely needed
      'active_callback' => '', // Rarely needed
   )
);
}

add_action( 'customize_register', 'remove_customizer_settings', 11 );

/*-------------------------------------------------------------------------------
	Contact Details
-------------------------------------------------------------------------------*/

function contact_details_customizer_settings($wp_customize) {
  // Add Contact Details Section
  $wp_customize->add_section( 'contact_details', array (
  'title' => 'Contact Details',
  'description' => 'Address and Contact Details',
  'priority' => 170
  ) );

  // Add Heading Setting & Control
  $wp_customize->add_setting('contact_details_heading',
    array(
      'sanitize_callback' => 'wp_kses_post' //keeps only HTML tags that are allowed in post content
    ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_details_heading',
  array(
  'label' => 'Heading',
  'type' => 'text',
  'section' => 'contact_details',
  'settings' => 'contact_details_heading'
  ) ) );

  // Add Address Setting & Control
  $wp_customize->add_setting('contact_details_address',
    array(
      'sanitize_callback' => 'wp_kses_post' //keeps only HTML tags that are allowed in post content
    ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_details_address',
  array(
  'label' => 'Address',
  'type' => 'textarea',
  'section' => 'contact_details',
  'settings' => 'contact_details_address'
  ) ) );

  // Add Phone Number Setting & Control
  $wp_customize->add_setting('contact_details_phone',
    array(
      'sanitize_callback' => 'wp_kses_post' //keeps only HTML tags that are allowed in post content
    ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_details_phone',
  array(
  'label' => 'Phone Number',
  'type' => 'text',
  'section' => 'contact_details',
  'settings' => 'contact_details_phone'
  ) ) );

  // Add Email Address Setting & Control
  $wp_customize->add_setting('contact_details_email',
    array(
      'sanitize_callback' => 'wp_kses_post' //keeps only HTML tags that are allowed in post content
    ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_details_email',
  array(
  'label' => 'Email Address',
  'type' => 'text',
  'section' => 'contact_details',
  'settings' => 'contact_details_email'
  ) ) );

}
add_action('customize_register', 'contact_details_customizer_settings');

/*-------------------------------------------------------------------------------
	Blog Posts
-------------------------------------------------------------------------------*/

function blog_posts_customizer_settings($wp_customize) {
  // Add Blog Posts Section
  $wp_customize->add_section( 'blog_posts', array (
  'title' => 'Blog Posts',
  'description' => 'Settings affecting blog posts',
  'priority' => 110
  ) );

  // Add Boilerplate Setting & Control
  $wp_customize->add_setting('blog_posts_boilerplate',
    array(
      'sanitize_callback' => 'wp_kses_post' //keeps only HTML tags that are allowed in post content
    ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blog_posts_boilerplate',
  array(
  'label' => 'Blog Post Boilerplate',
  'type' => 'textarea',
  'section' => 'blog_posts',
  'settings' => 'blog_posts_boilerplate'
  ) ) );
}
add_action('customize_register', 'blog_posts_customizer_settings');

/*-------------------------------------------------------------------------------
	Social Media Links
-------------------------------------------------------------------------------*/

function social_media_customizer_settings($wp_customize) {
  // Add Social Icons Section
  $wp_customize->add_section( 'social_icons', array (
  'title' => 'Social URLs',
  'description' => 'Enter the URL to your account on each social media site',
  'priority' => 120
  ) );

  // add a setting for the site Facebook URL
  $wp_customize->add_setting('facebook_url',
    array(
      'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
    ) );
  // Add a control to input the Facebook URL
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_url',
  array(
  'label' => 'Facebook',
  'section' => 'social_icons',
  'settings' => 'facebook_url'
  ) ) );

  // add a setting for the site Twitter URL
  $wp_customize->add_setting('twitter_url',
    array(
      'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
    ) );
  // Add a control to input the Twitter URL
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_url',
  array(
  'label' => 'Twitter',
  'section' => 'social_icons',
  'settings' => 'twitter_url'
  ) ) );

  // add a setting for the site Instagram URL
  $wp_customize->add_setting('instagram_url',
    array(
      'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
    ) );
  // Add a control to input the Instagram URL
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram_url',
  array(
  'label' => 'Instagram',
  'section' => 'social_icons',
  'settings' => 'instagram_url'
  ) ) );

  // add a setting for the site LinkedIn URL
  $wp_customize->add_setting('linkedin_url',
    array(
      'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
    ) );
  // Add a control to input the LinkedIn URL
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin_url',
  array(
  'label' => 'LinkedIn',
  'section' => 'social_icons',
  'settings' => 'linkedin_url'
  ) ) );

  // add a setting for the site YouTube URL
  $wp_customize->add_setting('youtube_url',
    array(
      'sanitize_callback' => 'esc_url_raw' //cleans URL from all invalid characters
    ) );
  // Add a control to input the YouTube URL
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube_url',
  array(
  'label' => 'YouTube',
  'section' => 'social_icons',
  'settings' => 'youtube_url'
  ) ) );
}
add_action('customize_register', 'social_media_customizer_settings');

/*-------------------------------------------------------------------------------
  Header Button Customiser Settings
-------------------------------------------------------------------------------*/

function header_button_customizer_settings($wp_customize) {
  // Add Header Button Section
  $wp_customize->add_section( 'header_button', array (
  'title' => 'Header Button',
  'description' => 'Settings for the CTA button in the header',
  'priority' => 100
  ) );

  // add a setting to enable the button
  $wp_customize->add_setting('enable_header_button');
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_header_button',
  array(
  'label'     => 'Enable Header Button',
  'section'   => 'header_button',
  'settings'  => 'enable_header_button',
  'type'      => 'checkbox'
  ) ) );

  // add a setting for the button URL
  $wp_customize->add_setting('header_button_url');
  // Add a control to input the Button URL
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_button_url',
  array(
  'label' => 'Button URL',
  'section' => 'header_button',
  'settings' => 'header_button_url'
  ) ) );

  // add a setting for the button text
  $wp_customize->add_setting('header_button_text');
  // Add a control to input the button text
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_button_text',
  array(
  'label' => 'Button Text',
  'section' => 'header_button',
  'settings' => 'header_button_text'
  ) ) );

  // add a setting to make the button link open in a new tab
  $wp_customize->add_setting('header_button_external_link');
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_button_external_link',
  array(
  'label'     => 'External Link',
  'section'   => 'header_button',
  'settings'  => 'header_button_external_link',
  'type'      => 'checkbox'
  ) ) );

}
add_action('customize_register', 'header_button_customizer_settings');

/*-------------------------------------------------------------------------------
  Default Hero Customiser Settings
-------------------------------------------------------------------------------*/
function hero_customizer_settings($wp_customize) {

  /*------------------------------
  // Default Hero Settings
  ------------------------------*/

  $wp_customize->add_section( 'default_hero', array (
  'title' => 'Default Hero Settings',
  'panel' => 'heroes',
  'description' => 'Default settings for page heroes',
  'priority' => 100
  ) );

      // Default background image
      $wp_customize->add_setting('default_hero_image');
      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'default_hero_image', array(
        'label' => 'Background Image',
        'section' => 'default_hero',
        'settings' => 'default_hero_image'
      ) ) );

      // Default Hero overlay opacity
      $wp_customize->add_setting('default_hero_overlay_opacity');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'default_hero_overlay_opacity',
      array(
        'label' => 'Overlay Opacity',
        'section' => 'default_hero',
        'description' => 'From 0 to 1 in 0.1 increments (e.g., 0.4)',
        'settings' => 'default_hero_overlay_opacity'
      ) ) );

      // Default text
      $wp_customize->add_setting('default_hero_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'default_hero_text',
      array(
      'label' => 'Text',
      'type' => 'textarea',
      'section' => 'default_hero',
      'settings' => 'default_hero_text'
      ) ) );

      // Default button 1 text
      $wp_customize->add_setting('default_hero_button_link');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'default_hero_button_link',
      array(
      'label' => 'Button 1 Link',
      'type' => 'dropdown-pages',
      'section' => 'default_hero',
      'settings' => 'default_hero_button_link'
      ) ) );

      // Default button 1 url
      $wp_customize->add_setting('default_hero_button_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'default_hero_button_text',
      array(
      'label' => 'Button 1 Text',
      'section' => 'default_hero',
      'settings' => 'default_hero_button_text'
      ) ) );

      // Default button 2 text
      $wp_customize->add_setting('default_hero_button_link_2');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'default_hero_button_link_2',
      array(
      'label' => 'Button 2 Link',
      'type' => 'dropdown-pages',
      'description' => 'Button hidden unless this is set',
      'section' => 'default_hero',
      'settings' => 'default_hero_button_link_2'
      ) ) );

      // Default button 2 url
      $wp_customize->add_setting('default_hero_button_text_2');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'default_hero_button_text_2',
      array(
      'label' => 'Button 2 Text',
      'section' => 'default_hero',
      'settings' => 'default_hero_button_text_2'
      ) ) );

  /*------------------------------
  # Families Page Hero Settings
  ------------------------------*/

  $wp_customize->add_section( 'families_page_hero', array (
  'title' => 'Families Page',
  'panel' => 'heroes',
  'description' => 'Settings for hero on Families archive page',
  'priority' => 110
  ) );

      // Families Page Hero Background Image
      $wp_customize->add_setting('families_page_hero_image');
      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'families_page_hero_image', array(
        'label' => 'Background Image',
        'section' => 'families_page_hero',
        'settings' => 'families_page_hero_image'
      ) ) );

      // Families Page Hero Overlay Opacity
      $wp_customize->add_setting('families_page_hero_overlay_opacity');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'families_page_hero_overlay_opacity',
      array(
        'label' => 'Overlay Opacity',
        'section' => 'families_page_hero',
        'description' => 'From 0 to 1 in 0.1 increments (e.g., 0.4)',
        'settings' => 'families_page_hero_overlay_opacity'
      ) ) );

      // Families Page Hero Title
      $wp_customize->add_setting('families_page_hero_title');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'families_page_hero_title',
      array(
      'label' => 'Title',
      'section' => 'families_page_hero',
      'settings' => 'families_page_hero_title'
      ) ) );

      // Families Page Hero Text
      $wp_customize->add_setting('families_page_hero_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'families_page_hero_text',
      array(
      'label' => 'Text',
      'type' => 'textarea',
      'section' => 'families_page_hero',
      'settings' => 'families_page_hero_text'
      ) ) );

      // Families Page Hero Hide Text Checkbox
      $wp_customize->add_setting('families_page_hero_hide_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'families_page_hero_hide_text',
      array(
      'label'     => 'Hide Text?',
      'section'   => 'families_page_hero',
      'settings'  => 'families_page_hero_hide_text',
      'type'      => 'checkbox'
      ) ) );

      // Families Page Hero Button text
      $wp_customize->add_setting('families_page_hero_button_url');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'families_page_hero_button_url',
      array(
      'label' => 'Button Link',
      'type' => 'dropdown-pages',
      'section' => 'families_page_hero',
      'settings' => 'families_page_hero_button_url'
      ) ) );

      // Families Page Hero Button url
      $wp_customize->add_setting('families_page_hero_button_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'families_page_hero_button_text',
      array(
      'label' => 'Button Text',
      'section' => 'families_page_hero',
      'settings' => 'families_page_hero_button_text'
      ) ) );

      // Families Page Hero Hide Button Checkbox
      $wp_customize->add_setting('families_page_hero_hide_button');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'families_page_hero_hide_button',
      array(
      'label'     => 'Hide Button?',
      'section'   => 'families_page_hero',
      'settings'  => 'families_page_hero_hide_button',
      'type'      => 'checkbox'
      ) ) );

  /*------------------------------
  # Library Page Hero Settings
  ------------------------------*/

  $wp_customize->add_section( 'library_page_hero', array (
  'title' => 'Library Page',
  'panel' => 'heroes',
  'description' => 'Settings for hero on Library archive page',
  'priority' => 110
  ) );

      // Library Page Hero Background Image
      $wp_customize->add_setting('library_page_hero_image');
      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'library_page_hero_image', array(
        'label' => 'Background Image',
        'section' => 'library_page_hero',
        'settings' => 'library_page_hero_image'
      ) ) );

      // Library Page Hero Overlay Opacity
      $wp_customize->add_setting('library_page_hero_overlay_opacity');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'library_page_hero_overlay_opacity',
      array(
        'label' => 'Overlay Opacity',
        'section' => 'library_page_hero',
        'description' => 'From 0 to 1 in 0.1 increments (e.g., 0.4)',
        'settings' => 'library_page_hero_overlay_opacity'
      ) ) );

      // Library Page Hero Title
      $wp_customize->add_setting('library_page_hero_title');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'library_page_hero_title',
      array(
      'label' => 'Title',
      'section' => 'library_page_hero',
      'settings' => 'library_page_hero_title'
      ) ) );

      // Library Page Hero Text
      $wp_customize->add_setting('library_page_hero_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'library_page_hero_text',
      array(
      'label' => 'Text',
      'type' => 'textarea',
      'section' => 'library_page_hero',
      'settings' => 'library_page_hero_text'
      ) ) );

      // Library Page Hero Hide Text Checkbox
      $wp_customize->add_setting('library_page_hero_hide_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'library_page_hero_hide_text',
      array(
      'label'     => 'Hide Text?',
      'section'   => 'library_page_hero',
      'settings'  => 'library_page_hero_hide_text',
      'type'      => 'checkbox'
      ) ) );

      // Library Page Hero Button text
      $wp_customize->add_setting('library_page_hero_button_url');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'library_page_hero_button_url',
      array(
      'label' => 'Button Link',
      'type' => 'dropdown-pages',
      'section' => 'library_page_hero',
      'settings' => 'library_page_hero_button_url'
      ) ) );

      // Library Page Hero Button url
      $wp_customize->add_setting('library_page_hero_button_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'library_page_hero_button_text',
      array(
      'label' => 'Button Text',
      'section' => 'library_page_hero',
      'settings' => 'library_page_hero_button_text'
      ) ) );

      // Library Page Hero Hide Button Checkbox
      $wp_customize->add_setting('library_page_hero_hide_button');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'library_page_hero_hide_button',
      array(
      'label'     => 'Hide Button?',
      'section'   => 'library_page_hero',
      'settings'  => 'library_page_hero_hide_button',
      'type'      => 'checkbox'
      ) ) );

  /*------------------------------
  # Teams Page Hero Settings
  ------------------------------*/

  $wp_customize->add_section( 'team_page_hero', array (
  'title' => 'Team Page',
  'panel' => 'heroes',
  'description' => 'Settings for hero on Team archive page',
  'priority' => 110
  ) );

      // Team Page Hero Background Image
      $wp_customize->add_setting('team_page_hero_image');
      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_page_hero_image', array(
        'label' => 'Background Image',
        'section' => 'team_page_hero',
        'settings' => 'team_page_hero_image'
      ) ) );

      // Team Page Hero Overlay Opacity
      $wp_customize->add_setting('team_page_hero_overlay_opacity');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team_page_hero_overlay_opacity',
      array(
        'label' => 'Overlay Opacity',
        'section' => 'team_page_hero',
        'description' => 'From 0 to 1 in 0.1 increments (e.g., 0.4)',
        'settings' => 'team_page_hero_overlay_opacity'
      ) ) );

      // Team Page Hero Title
      $wp_customize->add_setting('team_page_hero_title');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team_page_hero_title',
      array(
      'label' => 'Title',
      'section' => 'team_page_hero',
      'settings' => 'team_page_hero_title'
      ) ) );

      // Team Page Hero Text
      $wp_customize->add_setting('team_page_hero_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team_page_hero_text',
      array(
      'label' => 'Text',
      'type' => 'textarea',
      'section' => 'team_page_hero',
      'settings' => 'team_page_hero_text'
      ) ) );

      // Team Page Hero Hide Text Checkbox
      $wp_customize->add_setting('team_page_hero_hide_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team_page_hero_hide_text',
      array(
      'label'     => 'Hide Text?',
      'section'   => 'team_page_hero',
      'settings'  => 'team_page_hero_hide_text',
      'type'      => 'checkbox'
      ) ) );

      // Team Page Hero Button text
      $wp_customize->add_setting('team_page_hero_button_url');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team_page_hero_button_url',
      array(
      'label' => 'Button Link',
      'type' => 'dropdown-pages',
      'section' => 'team_page_hero',
      'settings' => 'team_page_hero_button_url'
      ) ) );

      // Team Page Hero Button url
      $wp_customize->add_setting('team_page_hero_button_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team_page_hero_button_text',
      array(
      'label' => 'Button Text',
      'section' => 'team_page_hero',
      'settings' => 'team_page_hero_button_text'
      ) ) );

      // Team Page Hero Hide Button Checkbox
      $wp_customize->add_setting('team_page_hero_hide_button');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team_page_hero_hide_button',
      array(
      'label'     => 'Hide Button?',
      'section'   => 'team_page_hero',
      'settings'  => 'team_page_hero_hide_button',
      'type'      => 'checkbox'
      ) ) );

  /*------------------------------
  # Updates Page Hero Settings
  ------------------------------*/

  $wp_customize->add_section( 'updates_page_hero', array (
  'title' => 'Updates Page',
  'panel' => 'heroes',
  'description' => 'Settings for hero on Updates archive page',
  'priority' => 110
  ) );

      // Updates Page Hero Background Image
      $wp_customize->add_setting('updates_page_hero_image');
      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'updates_page_hero_image', array(
        'label' => 'Background Image',
        'section' => 'updates_page_hero',
        'settings' => 'updates_page_hero_image'
      ) ) );

      // Updates Page Hero Overlay Opacity
      $wp_customize->add_setting('updates_page_hero_overlay_opacity');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'updates_page_hero_overlay_opacity',
      array(
        'label' => 'Overlay Opacity',
        'section' => 'updates_page_hero',
        'description' => 'From 0 to 1 in 0.1 increments (e.g., 0.4)',
        'settings' => 'updates_page_hero_overlay_opacity'
      ) ) );

      // Updates Page Hero Title
      $wp_customize->add_setting('updates_page_hero_title');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'updates_page_hero_title',
      array(
      'label' => 'Title',
      'section' => 'updates_page_hero',
      'settings' => 'updates_page_hero_title'
      ) ) );

      // Updates Page Hero Text
      $wp_customize->add_setting('updates_page_hero_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'updates_page_hero_text',
      array(
      'label' => 'Text',
      'type' => 'textarea',
      'section' => 'updates_page_hero',
      'settings' => 'updates_page_hero_text'
      ) ) );

      // Updates Page Hero Hide Text Checkbox
      $wp_customize->add_setting('updates_page_hero_hide_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'updates_page_hero_hide_text',
      array(
      'label'     => 'Hide Text?',
      'section'   => 'updates_page_hero',
      'settings'  => 'updates_page_hero_hide_text',
      'type'      => 'checkbox'
      ) ) );

      // Updates Page Hero Button text
      $wp_customize->add_setting('updates_page_hero_button_url');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'updates_page_hero_button_url',
      array(
      'label' => 'Button Link',
      'type' => 'dropdown-pages',
      'section' => 'updates_page_hero',
      'settings' => 'updates_page_hero_button_url'
      ) ) );

      // Updates Page Hero Button url
      $wp_customize->add_setting('updates_page_hero_button_text');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'updates_page_hero_button_text',
      array(
      'label' => 'Button Text',
      'section' => 'updates_page_hero',
      'settings' => 'updates_page_hero_button_text'
      ) ) );

      // Updates Page Hero Hide Button Checkbox
      $wp_customize->add_setting('updates_page_hero_hide_button');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'updates_page_hero_hide_button',
      array(
      'label'     => 'Hide Button?',
      'section'   => 'updates_page_hero',
      'settings'  => 'updates_page_hero_hide_button',
      'type'      => 'checkbox'
      ) ) );

  /*------------------------------
  # Search Results Hero Settings
  ------------------------------*/

  $wp_customize->add_section( 'search_results_page_hero', array (
  'title' => 'Search Results Page',
  'panel' => 'heroes',
  'description' => 'Settings for hero on Search Results archive page',
  'priority' => 110
  ) );

      // Search Results Page Hero Background Image
      $wp_customize->add_setting('search_results_page_hero_image');
      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'search_results_page_hero_image', array(
        'label' => 'Background Image',
        'section' => 'search_results_page_hero',
        'settings' => 'search_results_page_hero_image'
      ) ) );

      // Search Results Page Hero Overlay Opacity
      $wp_customize->add_setting('search_results_page_hero_overlay_opacity');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search_results_page_hero_overlay_opacity',
      array(
        'label' => 'Overlay Opacity',
        'section' => 'search_results_page_hero',
        'description' => 'From 0 to 1 in 0.1 increments (e.g., 0.4)',
        'settings' => 'search_results_page_hero_overlay_opacity'
      ) ) );

      // Search Results Page Hero Title
      $wp_customize->add_setting('search_results_page_hero_title');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search_results_page_hero_title',
      array(
      'label' => 'Title',
      'section' => 'search_results_page_hero',
      'settings' => 'search_results_page_hero_title'
      ) ) );
}

add_action('customize_register', 'hero_customizer_settings');

/*-------------------------------------------------------------------------------
  CTA Block Customiser Settings
-------------------------------------------------------------------------------*/

function cta_block_customizer_settings($wp_customize) {
  // Add CTA Section
  $wp_customize->add_section( 'cta_block', array (
  'title' => 'CTA Block Settings',
  'description' => 'Settings for the CTA block',
  'priority' => 100
  ) );

  // Default background image
  $wp_customize->add_setting('cta_block_background_image');
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cta_block_background_image', array(
    'label' => 'Background Image',
    'section' => 'cta_block',
    'settings' => 'cta_block_background_image'
  ) ) );


  // Title

  // add a setting for the title
  $wp_customize->add_setting('cta_block_title');
  // Add a control to input the title
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_title',
  array(
  'label' => 'Title',
  'section' => 'cta_block',
  'settings' => 'cta_block_title'
  ) ) );

  // Text

  // add a setting for the text
  $wp_customize->add_setting('cta_block_text');
  // Add a control to input the text
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_text',
  array(
  'label' => 'Text',
  'type' => 'textarea',
  'section' => 'cta_block',
  'settings' => 'cta_block_text'
  ) ) );

  // Button 1 link

  // add a setting for the button link
  $wp_customize->add_setting('cta_block_button_1_link');
  // Add a control to input the button link
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_button_1_link',
  array(
  'label' => 'Button 1 Link',
  'section' => 'cta_block',
  'settings' => 'cta_block_button_1_link'
  ) ) );

  // Button 1 external link?

  // add a setting to set the button as external
  $wp_customize->add_setting('cta_block_button_1_link_external');
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_button_1_link_external',
  array(
  'label'     => 'External link?',
  'section'   => 'cta_block',
  'settings'  => 'cta_block_button_1_link_external',
  'type'      => 'checkbox'
  ) ) );

  // Button 1 text

  // add a setting for the button text
  $wp_customize->add_setting('cta_block_button_1_text');
  // Add a control to input the button text
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_button_1_text',
  array(
  'label' => 'Button 1 Text',
  'section' => 'cta_block',
  'settings' => 'cta_block_button_1_text'
  ) ) );

  // Button 2 link

  // add a setting for the button link
  $wp_customize->add_setting('cta_block_button_2_link');
  // Add a control to input the button link
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_button_2_link',
  array(
  'label' => 'Button 2 Link',
  'section' => 'cta_block',
  'settings' => 'cta_block_button_2_link'
  ) ) );

  // Button 2 external link?

  // add a setting to set the button as external
  $wp_customize->add_setting('cta_block_button_2_link_external');
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_button_2_link_external',
  array(
  'label'     => 'External link?',
  'section'   => 'cta_block',
  'settings'  => 'cta_block_button_2_link_external',
  'type'      => 'checkbox'
  ) ) );

  // Button 2 text

  // add a setting for the button text
  $wp_customize->add_setting('cta_block_button_2_text');
  // Add a control to input the button text
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_button_2_text',
  array(
  'label' => 'Button 2 Text',
  'section' => 'cta_block',
  'settings' => 'cta_block_button_2_text'
  ) ) );

  // Overlay opacity

  // add a setting for the overlay opacity
  $wp_customize->add_setting('cta_block_overlay_opacity');
  // Add a control to input the overlay opacity
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_overlay_opacity',
  array(
  'label' => 'Overlay Opacity (e.g., 0.4)',
  'section' => 'cta_block',
  'settings' => 'cta_block_overlay_opacity'
  ) ) );

}
add_action('customize_register', 'cta_block_customizer_settings');

/*-------------------------------------------------------------------------------
	Partners Block
-------------------------------------------------------------------------------*/

function partners_block_customizer_settings($wp_customize) {
  // Add Partners Block Section
  $wp_customize->add_section( 'partners_block', array (
  'title' => 'Partners Block',
  'description' => 'Partners Block Settings',
  'priority' => 170
  ) );

      // Partners Block Title
      $wp_customize->add_setting('partners_block_title');
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'partners_block_title',
      array(
        'label' => 'Title',
        'section' => 'partners_block',
        'settings' => 'partners_block_title'
      ) ) );
}

add_action('customize_register', 'partners_block_customizer_settings');
