<?php
add_action( 'customize_register', 'customize_register' );
function customize_register( $wp_customize ) {
    // All the Customize Options you create goes here

    // Move Homepage Settings section underneath the "Site Identity" section
    $wp_customize->get_section('title_tagline')->priority = 1;
    $wp_customize->get_section('static_front_page')->priority = 2;
    $wp_customize->get_section('static_front_page')->title = __( 'Customize Homepage', 'customize_register' );

    // Theme Options Panel
$wp_customize->add_panel( 'theme_options', 
array(
    //'priority'       => 100,
    'title'            => __( 'Theme Options', 'theme_options' ),
    'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'theme_options' ),
) 
);

// Page settings

// Text Options Section Inside Theme
$wp_customize->add_section( 'Page_Options', 
    array(
        'title'         => __( 'Page Options', 'Page_Options' ),
        'priority'      => 1,
        'panel'         => 'theme_options'
    ) 
);

$wp_customize->add_setting( 'Background_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/banner.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'Background_image', 
    array(
        'priority'    => 40,
        'section'     => 'Page_Options',
        'label'       => 'Image',
        'description' => 'Image put here will page(s) background image',
    ) 
));


// Setting for Copyright text..

$wp_customize->add_section( 'Footer_Text_Options', 
    array(
        'title'         => __( 'Footer Text Options', 'Footer_Text_Options' ),
        'priority'      => 5,
        'panel'         => 'theme_options'
    ) 
);

$wp_customize->add_setting( 'copyright_text',
    array(
        'default'           => __( '© Copyright 2021 HOA Management ', 'copyright_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'copyright_text', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'Footer_Text_Options',
        'label'       => 'Copyright text',
        'description' => 'Text put here will be shown in the footer',
    ) 
);

$wp_customize->add_setting( 'Footer_text',
    array(
        'default'           => __( 'Blue Lake Homes', 'Footer_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'Footer_text', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'Footer_Text_Options',
        'label'       => 'Footer description text',
        'description' => 'Text put here will be shown in the footer',
    ) 
);

$wp_customize->add_setting( 'footer_image_logo',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/footer_logo.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_image_logo', 
    array(
        'priority'    => 40,
        'section'     => 'Footer_Text_Options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown as logo footer',
    ) 
));

//banner
// Text Options Section Inside Theme
$wp_customize->add_section( 'first_text_options', 
    array(
        'title'         => __( 'First Section Options', 'first_text_options' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'banner_heading',
    array(
        'default'           => __( 'Blue Lake Homes', 'banner_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'first_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in first sections heading',
    ) 
);

$wp_customize->add_setting( 'banner_button_text',
    array(
        'default'           => __( 'Sign In', 'banner_button_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_button_text', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'first_text_options',
        'label'       => 'Button text',
        'description' => 'Text put here will be shown in first sections button',
    ) 
);

//button link
$wp_customize->add_setting( 'banner_link',
    array(
        'default'           => __( '#', 'banner_link' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_link', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'first_text_options',
        'label'       => 'Button Link',
        'description' => 'Link put here will be the redirection link of your button when clicked',
    ) 
);

$wp_customize->add_setting( 'welcome_heading',
    array(
        'default'           => __( 'Welcome To Our Home', 'welcome_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'welcome_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'first_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in first sections heading',
    ) 
);
$wp_customize->add_setting( 'description',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl iaculis id enim nibh semper. Proin morbi donec diam suscipit tincidunt arcu id. Iaculis cursus eros, elit gravida mauris sit nunc. Velit erat phasellus habitant adipiscing nullam consectetur quisque est facilisi. Massa elementum id metus, mattis facilisis. Tincidunt est cursus proin mattis dui donec arcu. Nec dolor elementum ut eu sit turpis proin non, sed.', 'description' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'description', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'first_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in first sections heading',
    ) 
);
$wp_customize->add_setting( 'firts_iamge',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Rectangle1.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'firts_iamge', 
    array(
        'priority'    => 40,
        'section'     => 'first_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be first Image',
    ) 
));
$wp_customize->add_setting( 'second_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Rectangle2.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'second_image', 
    array(
        'priority'    => 40,
        'section'     => 'first_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be second Image',
    ) 
));
$wp_customize->add_setting( 'third_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Rectangle3.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'third_image', 
    array(
        'priority'    => 40,
        'section'     => 'first_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be third Image',
    ) 
));
//second section
// Text Options Section Inside Theme
$wp_customize->add_section( 'second_section_text_options', 
    array(
        'title'         => __( 'Second Section Text Options', 'second_section_text_options' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'latest_heading',
    array(
        'default'           => __( 'Latest News', 'latest_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'latest_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in second sections heading',
    ) 
);

$wp_customize->add_setting( 'latest_description',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor.', 'latest_description' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'latest_description', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in second sections description',
    ) 
);
$wp_customize->add_setting( 'latest_sale',
    array(
        'default'           => __( 'Backyard Sale 12-15-2021<br>Easter Egg Hunt 04-23-2021<br>Coffee Hours 02-08-2021<br>Backyard Together 11-16-2021<br>Pet Celebration 07-10-2021', 'latest_sale' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'latest_sale', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in second sections description',
    ) 
);
$wp_customize->add_setting( 'map',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/map.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'map', 
    array(
        'priority'    => 40,
        'section'     => 'second_section_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be a map',
    ) 
));




}
?>