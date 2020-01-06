<?php
/*-------------------------------------------------------------------------------
	Social Media Links in Customiser
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
