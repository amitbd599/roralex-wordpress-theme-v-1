<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function roralex_widgets_init() {

    $footer_style_2_switch = get_theme_mod( 'footer_style_2_switch', false );
    $footer_style_3_switch = get_theme_mod( 'footer_style_3_switch', false );
    $footer_style_4_switch = get_theme_mod( 'footer_style_4_switch', false );

    /**
     * blog sidebar
     */
    register_sidebar( [
        'name'          => esc_html__( 'Blog Sidebar', 'roralex' ),
        'id'            => 'blog-sidebar',
        'description'          => esc_html__( 'Set Your Blog Widget', 'roralex' ),
        'before_widget' => '<div id="%1$s" class="sidebar-widget mb-15 %2$s"> ',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar__widget-head"><h3 class="sidebar__widget-title">',
        'after_title'   => '</h3></div>',
    ] );


    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    // footer default
    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        register_sidebar( [
            'name'          => sprintf( esc_html__( 'Footer %1$s', 'roralex' ), $num ),
            'id'            => 'footer-' . $num,
            'description'   => sprintf( esc_html__( 'Footer column %1$s', 'roralex' ), $num ),
            'before_widget' => '<div id="%1$s" class="footer__widget  wrapper-'.$num.' %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="footer__widget-title">',
            'after_title'   => '</h3>',
        ] );
    }

    // footer 2
    if ( $footer_style_2_switch ) {
        for ( $num = 1; $num <= $footer_widgets; $num++ ) {

            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 2 : %1$s', 'roralex' ), $num ),
                'id'            => 'footer-2-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 2 : %1$s', 'roralex' ), $num ),
                'before_widget' => '<div id="%1$s" class="footer__widget  wrapper-'.$num.' %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="footer__widget-title">',
                'after_title'   => '</h3>',
            ] );
        }
    }

    // footer 3
    if ( $footer_style_3_switch ) {
        for ( $num = 1; $num <= $footer_widgets; $num++ ) {
            register_sidebar( [
                'name'          => sprintf( esc_html__( 'Footer Style 3 : %1$s', 'roralex' ), $num ),
                'id'            => 'footer-3-' . $num,
                'description'   => sprintf( esc_html__( 'Footer Style 3 : %1$s', 'roralex' ), $num ),
                'before_widget' => '<div id="%1$s" class="footer__widget  wrapper-'.$num.' %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="footer__widget-title">',
                'after_title'   => '</h3>',
            ] );
        }
    }

}
add_action( 'widgets_init', 'roralex_widgets_init' );