<?php
/**
 * roralex customizer
 *
 * @package roralex
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Added Panels & Sections
 */
function roralex_customizer_panels_sections( $wp_customize ) {

    //Add panel
    $wp_customize->add_panel( 'roralex_customizer', [
        'priority' => 10,
        'title'    => esc_html__( 'Roralex Customizer', 'roralex' ),
    ] );

    /**
     * Customizer Section
     */
    $wp_customize->add_section( 'header_top_setting', [
        'title'       => esc_html__( 'Header Info Setting', 'roralex' ),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( 'header_social', [
        'title'       => esc_html__( 'Header Social', 'roralex' ),
        'description' => '',
        'priority'    => 11,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( 'section_header_logo', [
        'title'       => esc_html__( 'Header Setting', 'roralex' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'roralex' ),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( 'header_side_setting', [
        'title'       => esc_html__( 'Side Info', 'roralex' ),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( 'breadcrumb_setting', [
        'title'       => esc_html__( 'Breadcrumb Setting', 'roralex' ),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'roralex' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'roralex' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( 'color_setting', [
        'title'       => esc_html__( 'Color Setting', 'roralex' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'roralex' ),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( 'tutor_course_settings', [
        'title'       => esc_html__( 'Tutor Course Settings ', 'roralex' ),
        'description' => '',
        'priority'    => 19,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( 'event_settings', [
        'title'       => esc_html__( 'Event Settings ', 'roralex' ),
        'description' => '',
        'priority'    => 19,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( 'learndash_course_settings', [
        'title'       => esc_html__( 'Learndash Course Settings ', 'roralex' ),
        'description' => '',
        'priority'    => 20,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'roralex' ),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );

    $wp_customize->add_section( 'tutor_course_settings', [
        'title'       => esc_html__( 'Tutor Course Settings ', 'roralex' ),
        'description' => '',
        'priority'    => 23,
        'capability'  => 'edit_theme_options',
        'panel'       => 'roralex_customizer',
    ] );
}

add_action( 'customize_register', 'roralex_customizer_panels_sections' );

function _header_top_fields( $fields ) {
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_topbar_switch',
        'label'    => esc_html__( 'Topbar Swicher', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_preloader',
        'label'    => esc_html__( 'Preloader On/Off', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];


    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_backtotop',
        'label'    => esc_html__( 'Back To Top On/Off', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_header_right',
        'label'    => esc_html__( 'Header Right On/Off', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_search',
        'label'    => esc_html__( 'Header Search On/Off', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_header_lang',
        'label'    => esc_html__( 'language On/Off', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    // button
    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_button_text',
        'label'    => esc_html__( 'Button Text', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Get A Quote', 'roralex' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'roralex_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'link',
        'settings' => 'roralex_button_link',
        'label'    => esc_html__( 'Button URL', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'roralex' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'roralex_header_right',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];


    // phone
    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_phone_num',
        'label'    => esc_html__( 'Phone Number', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '+(088) 234 567 899', 'roralex' ),
        'priority' => 10,
    ];

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_mail_id',
        'label'    => esc_html__( 'Mail ID', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'info@roralex.com', 'roralex' ),
        'priority' => 10,
    ];

    // email
    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_address',
        'label'    => esc_html__( 'Address', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Moon ave, New York, 2020 NY US', 'roralex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_address_url',
        'label'    => esc_html__( 'Address URL', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'https://goo.gl/maps/qzqY2PAcQwUz1BYN9', 'roralex' ),
        'priority' => 10,
    ];

    // Login
    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_acc_button_text',
        'label'    => esc_html__( 'Login', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( 'Login', 'roralex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_acc_button_link',
        'label'    => esc_html__( 'Account URL', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'roralex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'roralex_top_menu',
        'label'    => esc_html__( 'Top Menu', 'roralex' ),
        'section'  => 'header_top_setting',
        'default'  => esc_html__( '#', 'roralex' ),
        'priority' => 10,
    ];

    return $fields;

}
add_filter( 'kirki/fields', '_header_top_fields' );

/*
Header Social
 */
function _header_social_fields( $fields ) {
    // header section social
    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_topbar_fb_url',
        'label'    => esc_html__( 'Facebook Url', 'roralex' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'roralex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_topbar_twitter_url',
        'label'    => esc_html__( 'Twitter Url', 'roralex' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'roralex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_topbar_linkedin_url',
        'label'    => esc_html__( 'Linkedin Url', 'roralex' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'roralex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_topbar_instagram_url',
        'label'    => esc_html__( 'Instagram Url', 'roralex' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'roralex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_topbar_youtube_url',
        'label'    => esc_html__( 'Youtube Url', 'roralex' ),
        'section'  => 'header_social',
        'default'  => esc_html__( '#', 'roralex' ),
        'priority' => 10,
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_header_social_fields' );

/*
Header Settings
 */
function _header_header_fields( $fields ) {
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_header',
        'label'       => esc_html__( 'Select Header Style', 'roralex' ),
        'section'     => 'section_header_logo',
        'placeholder' => esc_html__( 'Select an option...', 'roralex' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'header-style-1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
            'header-style-2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
            'header-style-3'  => get_template_directory_uri() . '/inc/img/header/header-3.png'
        ],
        'default'     => 'header-style-1',
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo',
        'label'       => esc_html__( 'Header Logo', 'roralex' ),
        'description' => esc_html__( 'Upload Your Logo.', 'roralex' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/common/Logo_White.png',
    ];


    $fields[] = [
        'type'        => 'image',
        'settings'    => 'preloader_logo',
        'label'       => esc_html__( 'Preloader Logo', 'roralex' ),
        'description' => esc_html__( 'Upload Preloader Logo.', 'roralex' ),
        'section'     => 'section_header_logo',
        'default'     => get_template_directory_uri() . '/assets/img/favicon.png',
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_header_fields' );

/*
Header Side Info
 */
function _header_side_fields( $fields ) {
    // side info settings
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_side_hide',
        'label'    => esc_html__( 'Side Info On/Off', 'roralex' ),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_search_hide',
        'label'    => esc_html__( 'Search Info On/Off', 'roralex' ),
        'section'  => 'header_side_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'roralex_side_logo',
        'label'       => esc_html__( 'Logo Side', 'roralex' ),
        'description' => esc_html__( 'Logo Side', 'roralex' ),
        'section'     => 'header_side_setting',
        'default'     => get_template_directory_uri() . '/assets/img/common/Logo_White.png',
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'roralex_extra_about_text',
        'label'    => esc_html__( 'Side Description Text', 'roralex' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore', 'roralex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'roralex_extra_map',
        'label'    => esc_html__( 'Map Address Iframe', 'roralex' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '#', 'roralex' ),
        'priority' => 10,
    ];

    // contact
    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_contact_title',
        'label'    => esc_html__( 'Contact Title', 'roralex' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'Contact Title', 'roralex' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'roralex_extra_address',
        'label'    => esc_html__( 'Office Address', 'roralex' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '12/A, Mirnada City Tower, NYC', 'roralex' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'roralex_extra_phone',
        'label'    => esc_html__( 'Phone Number', 'roralex' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '+0989 7876 9865 9', 'roralex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'roralex_extra_email',
        'label'    => esc_html__( 'Email ID', 'roralex' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'info@weblearnbd.net', 'roralex' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_side_fields' );

/*
_header_page_title_fields
 */
function _header_page_title_fields( $fields ) {
    // Breadcrumb Setting
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__( 'Breadcrumb Background Image', 'roralex' ),
        'description' => esc_html__( 'Breadcrumb Background Image', 'roralex' ),
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/img/page-title/page-title.jpg',
    ];
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'roralex_breadcrumb_bg_color',
        'label'       => __( 'Breadcrumb BG Color', 'roralex' ),
        'description' => esc_html__( 'This is a Breadcrumb bg color control.', 'roralex' ),
        'section'     => 'breadcrumb_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_info_switch',
        'label'    => esc_html__( 'Breadcrumb Info switch', 'roralex' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'breadcrumb_switch',
        'label'    => esc_html__( 'Breadcrumb Hide', 'roralex' ),
        'section'  => 'breadcrumb_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_page_title_fields' );

/*
Header Social
 */
function _header_blog_fields( $fields ) {
// Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_blog_btn_switch',
        'label'    => esc_html__( 'Blog BTN On/Off', 'roralex' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_blog_cat',
        'label'    => esc_html__( 'Blog Category Meta On/Off', 'roralex' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_blog_author',
        'label'    => esc_html__( 'Blog Author Meta On/Off', 'roralex' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_blog_date',
        'label'    => esc_html__( 'Blog Date Meta On/Off', 'roralex' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_blog_comments',
        'label'    => esc_html__( 'Blog Comments Meta On/Off', 'roralex' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_blog_btn',
        'label'    => esc_html__( 'Blog Button text', 'roralex' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Read More', 'roralex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__( 'Blog Title', 'roralex' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog', 'roralex' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__( 'Blog Details Title', 'roralex' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog Details', 'roralex' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_blog_fields' );

/*
Footer
 */
function _header_footer_fields( $fields ) {
    // Footer Setting
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_footer',
        'label'       => esc_html__( 'Choose Footer Style', 'roralex' ),
        'section'     => 'footer_setting',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'roralex' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'footer-style-1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
            'footer-style-2' => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
            'footer-style-3' => get_template_directory_uri() . '/inc/img/footer/footer-3.png',
            'footer-style-4' => get_template_directory_uri() . '/inc/img/footer/footer-4.png',
        ],
        'default'     => 'footer-style-1',
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_number',
        'label'       => esc_html__( 'Widget Number', 'roralex' ),
        'section'     => 'footer_setting',
        'default'     => '4',
        'placeholder' => esc_html__( 'Select an option...', 'roralex' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            '4' => esc_html__( 'Widget Number 4', 'roralex' ),
            '3' => esc_html__( 'Widget Number 3', 'roralex' ),
            '2' => esc_html__( 'Widget Number 2', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'roralex_footer_bg',
        'label'       => esc_html__( 'Footer Background Image.', 'roralex' ),
        'description' => esc_html__( 'Footer Background Image.', 'roralex' ),
        'section'     => 'footer_setting',
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'roralex_footer_bg_color',
        'label'       => __( 'Footer BG Color', 'roralex' ),
        'description' => esc_html__( 'This is a Footer bg color control.', 'roralex' ),
        'section'     => 'footer_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_2_switch',
        'label'    => esc_html__( 'Footer Style 2 On/Off', 'roralex' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_3_switch',
        'label'    => esc_html__( 'Footer Style 3 On/Off', 'roralex' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_style_4_switch',
        'label'    => esc_html__( 'Footer Style 4 On/Off', 'roralex' ),
        'section'  => 'footer_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_copyright',
        'label'    => esc_html__( 'Copy Right', 'roralex' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( 'Copyright &copy; 2022 Theme_Pure. All Rights Reserved', 'roralex' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_footer_fields' );

// color
function roralex_color_fields( $fields ) {
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'roralex_color_option',
        'label'       => __( 'Theme Color', 'roralex' ),
        'description' => esc_html__( 'This is a Theme color control.', 'roralex' ),
        'section'     => 'color_setting',
        'default'     => '#2b4eff',
        'priority'    => 10,
    ];
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'roralex_color_option_2',
        'label'       => __( 'Primary Color', 'roralex' ),
        'description' => esc_html__( 'This is a Primary color control.', 'roralex' ),
        'section'     => 'color_setting',
        'default'     => '#f2277e',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'roralex_color_option_3',
        'label'       => __( 'Secondary Color', 'roralex' ),
        'description' => esc_html__( 'This is a Secondary color control.', 'roralex' ),
        'section'     => 'color_setting',
        'default'     => '#30a820',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'roralex_color_option_3_2',
        'label'       => __( 'Secondary Color 2', 'roralex' ),
        'description' => esc_html__( 'This is a Secondary color 2 control.', 'roralex' ),
        'section'     => 'color_setting',
        'default'     => '#ffb352',
        'priority'    => 10,
    ];
     // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'roralex_color_scrollup',
        'label'       => __( 'ScrollUp Color', 'roralex' ),
        'description' => esc_html__( 'This is a ScrollUp colo control.', 'roralex' ),
        'section'     => 'color_setting',
        'default'     => '#2b4eff',
        'priority'    => 10,
    ];

    return $fields;
}
add_filter( 'kirki/fields', 'roralex_color_fields' );

// 404
function roralex_404_fields( $fields ) {
    // 404 settings
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'roralex_404_bg',
        'label'       => esc_html__( '404 Image.', 'roralex' ),
        'description' => esc_html__( '404 Image.', 'roralex' ),
        'section'     => '404_page',
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_error_title',
        'label'    => esc_html__( 'Not Found Title', 'roralex' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Page not found', 'roralex' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'roralex_error_desc',
        'label'    => esc_html__( '404 Description Text', 'roralex' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Oops! The page you are looking for does not exist. It might have been moved or deleted', 'roralex' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'roralex_error_link_text',
        'label'    => esc_html__( '404 Link Text', 'roralex' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Back To Home', 'roralex' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'roralex_404_fields' );

// course_settings
function roralex_learndash_fields( $fields ) {

    $fields[] = [
        'type'     => 'number',
        'settings' => 'roralex_learndash_post_number',
        'label'    => esc_html__( 'Learndash Post Per page', 'roralex' ),
        'section'  => 'learndash_course_settings',
        'default'  => 6,
        'priority' => 10,
    ];

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'roralex_learndash_order',
        'label'       => esc_html__( 'Post Order', 'roralex' ),
        'section'     => 'learndash_course_settings',
        'default'     => 'DESC',
        'placeholder' => esc_html__( 'Select an option...', 'roralex' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'ASC' => esc_html__( 'ASC', 'roralex' ),
            'DESC' => esc_html__( 'DESC', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_learndash_related',
        'label'    => esc_html__( 'Show Related?', 'roralex' ),
        'section'  => 'learndash_course_settings',
        'default'  => 1,
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    return $fields;

}

if ( class_exists( 'SFWD_LMS' ) ) {
add_filter( 'kirki/fields', 'roralex_learndash_fields' );
}


// tutor_course_settings
function roralex_tutor_course_fields( $fields ) {
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_tutor_course_details_author_meta_switch',
        'label'    => esc_html__( 'Tutor Course Details Author Meta', 'roralex' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_tutor_course_details_payment_switch',
        'label'    => esc_html__( 'Tutor Course Details Payment', 'roralex' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_tutor_course_desc_tab_switch',
        'label'    => esc_html__( 'Tutor Course Description Tab Swicher', 'roralex' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_tutor_course_curriculum_tab_switch',
        'label'    => esc_html__( 'Tutor Course Curriculum Tab Swicher', 'roralex' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_tutor_course_reviews_tab_switch',
        'label'    => esc_html__( 'Tutor Course Reviews Tab Swicher', 'roralex' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'roralex_tutor_course_instructor_tab_switch',
        'label'    => esc_html__( 'Tutor Course Instructor Tab Swicher', 'roralex' ),
        'section'  => 'tutor_course_settings',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
    ];
    return $fields;
}

if (  function_exists('tutor') ) {
    add_filter( 'kirki/fields', 'roralex_tutor_course_fields' );
}

/**
 * Added Event Fields
 */
function roralex_event_fields( $fields ) {
    // event settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'event_btn_text',
        'label'    => esc_html__( 'Button Text', 'roralex' ),
        'section'  => 'event_settings',
        'default'  => esc_html__( 'Enroll Now', 'roralex' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'event_btn_link',
        'label'    => esc_html__( 'Button Link', 'roralex' ),
        'section'  => 'event_settings',
        'default'  => esc_html__( '#', 'roralex' ),
        'priority' => 10,
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'roralex_event_fields' );


/**
 * Added Fields
 */
function roralex_typo_fields( $fields ) {
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__( 'Body Font', 'roralex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__( 'Heading h1 Fonts', 'roralex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__( 'Heading h2 Fonts', 'roralex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__( 'Heading h3 Fonts', 'roralex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__( 'Heading h4 Fonts', 'roralex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__( 'Heading h5 Fonts', 'roralex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__( 'Heading h6 Fonts', 'roralex' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'roralex_typo_fields' );


// course_settings
function roralex_course_fields( $fields ) {

    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'course_style',
        'label'       => esc_html__( 'Select Course Style', 'roralex' ),
        'section'     => 'tutor_course_settings',
        'default'     => '5',
        'placeholder' => esc_html__( 'Select an option...', 'roralex' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'standard'   => get_template_directory_uri() . '/inc/img/course/course-1.jpg',
            'course_with_sidebar' => get_template_directory_uri() . '/inc/img/course/course-2.jpg',
            'course_solid'  => get_template_directory_uri() . '/inc/img/course/course-3.jpg',
        ],
        'default'     => 'standard',
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_search_switch',
        'label'    => esc_html__( 'Show search?', 'roralex' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_latest_post_switch',
        'label'    => esc_html__( 'Show latest post?', 'roralex' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_category_switch',
        'label'    => esc_html__( 'Show category filter?', 'roralex' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'course_skill_switch',
        'label'    => esc_html__( 'Show skill filter?', 'roralex' ),
        'section'  => 'tutor_course_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'roralex' ),
            'off' => esc_html__( 'Disable', 'roralex' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'course_with_sidebar',
                'operator' => '==',
                'value'    => true,
            ],
        ],
    ];

    return $fields;

}

add_filter( 'kirki/fields', 'roralex_course_fields' );




/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function roralex_THEME_option( $name ) {
    $value = '';
    if ( class_exists( 'roralex' ) ) {
        $value = Kirki::get_option( roralex_get_theme(), $name );
    }

    return apply_filters( 'roralex_THEME_option', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function roralex_get_theme() {
    return 'roralex';
}