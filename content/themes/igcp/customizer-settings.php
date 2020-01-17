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
}

add_action( 'customize_register', 'remove_customizer_settings', 11 );

/*-------------------------------------------------------------------------------
	Contact Details
-------------------------------------------------------------------------------*/

function contact_details_customizer_settings($wp_customize) {
  // Add Contact Details Section
  $wp_customize->add_section('contact_details', array(
  'title' => 'Contact Details',
  'description' => 'Address and Contact Details',
  'priority' => 170,
  ));

  // Add Heading Setting & Control
  $wp_customize->add_setting('contact_details_heading');
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_details_heading',
  array(
  'label' => 'Heading',
  'type' => 'text',
  'section' => 'contact_details',
  'settings' => 'contact_details_heading',
  ) ) );

  // Add Address Setting & Control
  $wp_customize->add_setting('contact_details_address');
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_details_address',
  array(
  'label' => 'Address',
  'type' => 'textarea',
  'section' => 'contact_details',
  'settings' => 'contact_details_address',
  ) ) );

  // Add Phone Number Setting & Control
  $wp_customize->add_setting('contact_details_phone');
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_details_phone',
  array(
  'label' => 'Phone Number',
  'type' => 'text',
  'section' => 'contact_details',
  'settings' => 'contact_details_phone',
  ) ) );

  // Add Email Address Setting & Control
  $wp_customize->add_setting('contact_details_email');
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_details_email',
  array(
  'label' => 'Email Address',
  'type' => 'text',
  'section' => 'contact_details',
  'settings' => 'contact_details_email',
  ) ) );

}
add_action('customize_register', 'contact_details_customizer_settings');

/*-------------------------------------------------------------------------------
	Blog Posts
-------------------------------------------------------------------------------*/

function blog_posts_customizer_settings($wp_customize) {
  // Add Contact Details Section
  $wp_customize->add_section('blog_posts', array(
  'title' => 'Blog Posts',
  'description' => 'Settings affecting blog posts',
  'priority' => 110,
  ));

  // Add Address Setting & Control
  $wp_customize->add_setting('blog_posts_boilerplate');
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'blog_posts_boilerplate',
  array(
  'label' => 'Text',
  'type' => 'textarea',
  'section' => 'blog_posts',
  'settings' => 'blog_posts_boilerplate',
  ) ) );
}
add_action('customize_register', 'blog_posts_customizer_settings');

/*-------------------------------------------------------------------------------
	Social Media Links
-------------------------------------------------------------------------------*/

function social_media_customizer_settings($wp_customize) {
  // Add Social Icons Section
  $wp_customize->add_section('social_icons', array(
  'title' => 'Social URLs',
  'description' => 'Enter the URL to your account on each social media site',
  'priority' => 120,
  ));
  // add a setting for the site Facebook URL
  $wp_customize->add_setting('facebook_url');
  // Add a control to input the Facebook URL
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_url',
  array(
  'label' => 'Facebook',
  'section' => 'social_icons',
  'settings' => 'facebook_url',
  ) ) );
  // add a setting for the site Twitter URL
  $wp_customize->add_setting('twitter_url');
  // Add a control to input the Twitter URL
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_url',
  array(
  'label' => 'Twitter',
  'section' => 'social_icons',
  'settings' => 'twitter_url',
  ) ) );
  // add a setting for the site Instagram URL
  $wp_customize->add_setting('instagram_url');
  // Add a control to input the Instagram URL
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram_url',
  array(
  'label' => 'Instagram',
  'section' => 'social_icons',
  'settings' => 'instagram_url',
  ) ) );
  // add a setting for the site LinkedIn URL
  $wp_customize->add_setting('linkedin_url');
  // Add a control to input the LinkedIn URL
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin_url',
  array(
  'label' => 'LinkedIn',
  'section' => 'social_icons',
  'settings' => 'linkedin_url',
  ) ) );
  // add a setting for the site YouTube URL
  $wp_customize->add_setting('youtube_url');
  // Add a control to input the YouTube URL
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'youtube_url',
  array(
  'label' => 'YouTube',
  'section' => 'social_icons',
  'settings' => 'youtube_url',
  ) ) );
}
add_action('customize_register', 'social_media_customizer_settings');

/*-------------------------------------------------------------------------------
  Header Button Customiser Settings
-------------------------------------------------------------------------------*/

function header_button_customizer_settings($wp_customize) {
  // Add Header Button Section
  $wp_customize->add_section('header_button', array(
  'title' => 'Header Button',
  'description' => 'Settings for the CTA button in the header',
  'priority' => 100,
  ));

  // add a setting to enable the button
  $wp_customize->add_setting('enable_header_button');
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'enable_header_button',
  array(
  'label'     => 'Enable Header Button',
  'section'   => 'header_button',
  'settings'  => 'enable_header_button',
  'type'      => 'checkbox',
  ) ) );

  // add a setting for the button URL
  $wp_customize->add_setting('header_button_url');
  // Add a control to input the Button URL
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_button_url',
  array(
  'label' => 'Button URL',
  'section' => 'header_button',
  'settings' => 'header_button_url',
  ) ) );

  // add a setting for the button text
  $wp_customize->add_setting('header_button_text');
  // Add a control to input the button text
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_button_text',
  array(
  'label' => 'Button Text',
  'section' => 'header_button',
  'settings' => 'header_button_text',
  ) ) );

  // add a setting to make the button link open in a new tab
  $wp_customize->add_setting('header_button_external_link');
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_button_external_link',
  array(
  'label'     => 'External Link',
  'section'   => 'header_button',
  'settings'  => 'header_button_external_link',
  'type'      => 'checkbox',
  ) ) );

}
add_action('customize_register', 'header_button_customizer_settings');

/*-------------------------------------------------------------------------------
  Default Hero Customiser Settings
-------------------------------------------------------------------------------*/

function default_hero_customizer_settings($wp_customize) {
  // Add Default Hero Section
  $wp_customize->add_section('default_hero', array(
  'title' => 'Default Hero Settings',
  'description' => 'Settings for the CTA button in the header',
  'priority' => 100,
  ));

  // Default background image
  $wp_customize->add_setting('default_hero_image');
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'default_hero_image', array(
    'label' => 'Default Background Image',
    'section' => 'default_hero',
    'settings' => 'default_hero_image',
  )));


  // Default text

  // add a setting for the button text
  $wp_customize->add_setting('default_hero_text');
  // Add a control to input the button text
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'default_hero_text',
  array(
  'label' => 'Default Text',
  'type' => 'textarea',
  'section' => 'default_hero',
  'settings' => 'default_hero_text',
  ) ) );

  // Default button text

  // add a setting for the button link
  $wp_customize->add_setting('default_hero_button_link');
  // Add a control to input the button link
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'default_hero_button_link',
  array(
  'label' => 'Button Link',
  'type' => 'dropdown-pages',
  'section' => 'default_hero',
  'settings' => 'default_hero_button_link',
  ) ) );

  // Default button url

  // add a setting for the button text
  $wp_customize->add_setting('default_hero_button_text');
  // Add a control to input the button text
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'default_hero_button_text',
  array(
  'label' => 'Button Text',
  'section' => 'default_hero',
  'settings' => 'default_hero_button_text',
  ) ) );

}
add_action('customize_register', 'default_hero_customizer_settings');

/*-------------------------------------------------------------------------------
  CTA Block Customiser Settings
-------------------------------------------------------------------------------*/

function cta_block_customizer_settings($wp_customize) {
  // Add Default Hero Section
  $wp_customize->add_section('cta_block', array(
  'title' => 'CTA Block Settings',
  'description' => 'Settings for the CTA block',
  'priority' => 100,
  ));

  // Default background image
  $wp_customize->add_setting('cta_block_background_image');
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cta_block_background_image', array(
    'label' => 'Background Image',
    'section' => 'cta_block',
    'settings' => 'cta_block_background_image',
  )));


  // Title

  // add a setting for the title
  $wp_customize->add_setting('cta_block_title');
  // Add a control to input the title
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_title',
  array(
  'label' => 'Title',
  'section' => 'cta_block',
  'settings' => 'cta_block_title',
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
  'settings' => 'cta_block_text',
  ) ) );

  // Button 1 link

  // add a setting for the button link
  $wp_customize->add_setting('cta_block_button_1_link');
  // Add a control to input the button link
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_button_1_link',
  array(
  'label' => 'Button 1 Link',
  'type' => 'dropdown-pages',
  'section' => 'cta_block',
  'settings' => 'cta_block_button_1_link',
  ) ) );

  // Button 1 text

  // add a setting for the button text
  $wp_customize->add_setting('cta_block_button_1_text');
  // Add a control to input the button text
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_button_1_text',
  array(
  'label' => 'Button 1 Text',
  'section' => 'cta_block',
  'settings' => 'cta_block_button_1_text',
  ) ) );

  // Button 2 link

  // add a setting for the button link
  $wp_customize->add_setting('cta_block_button_2_link');
  // Add a control to input the button link
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_button_2_link',
  array(
  'label' => 'Button 2 Link',
  'type' => 'dropdown-pages',
  'section' => 'cta_block',
  'settings' => 'cta_block_button_2_link',
  ) ) );

  // Button 2 text

  // add a setting for the button text
  $wp_customize->add_setting('cta_block_button_2_text');
  // Add a control to input the button text
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_button_2_text',
  array(
  'label' => 'Button 2 Text',
  'section' => 'cta_block',
  'settings' => 'cta_block_button_2_text',
  ) ) );

  // Overlay opacity

  // add a setting for the overlay opacity
  $wp_customize->add_setting('cta_block_overlay_opacity');
  // Add a control to input the overlay opacity
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cta_block_overlay_opacity',
  array(
  'label' => 'Overlay Opacity (e.g., 0.4)',
  'section' => 'cta_block',
  'settings' => 'cta_block_overlay_opacity',
  ) ) );

}
add_action('customize_register', 'cta_block_customizer_settings');
