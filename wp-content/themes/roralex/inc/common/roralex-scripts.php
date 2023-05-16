<?php

/**
 * roralex_scripts description
 * @return [type] [description]
 */
function roralex_scripts() {

    /**
     * all css files
    */

    wp_enqueue_style( 'roralex-fonts', roralex_fonts_url(), array(), time() );
    if( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', RORALEX_THEME_CSS_DIR.'bootstrap.rtl.min.css', array() );
    }else{
        wp_enqueue_style( 'bootstrap', RORALEX_THEME_CSS_DIR.'bootstrap.css', array() );
    }


    wp_enqueue_style( 'animate', RORALEX_THEME_CSS_DIR . 'animate.css', [] );
    wp_enqueue_style( 'animationtabs', RORALEX_THEME_CSS_DIR . 'animationtabs.css', [] );
    wp_enqueue_style( 'animationtabs', RORALEX_THEME_CSS_DIR . 'animationtabs.css', [] );
    wp_enqueue_style( 'backtotop', RORALEX_THEME_CSS_DIR . 'backtotop.css', [] );
    wp_enqueue_style( 'flaticon', RORALEX_THEME_CSS_DIR . 'flaticon.css', [] );
    wp_enqueue_style( 'font-awesome-pro', RORALEX_THEME_CSS_DIR . 'font-awesome-pro.css', [] );
    wp_enqueue_style( 'jQueryTab', RORALEX_THEME_CSS_DIR . 'jQueryTab.css', [] );
    wp_enqueue_style( 'magnific-popup', RORALEX_THEME_CSS_DIR . 'magnific-popup.css', [] );
    wp_enqueue_style( 'marquee', RORALEX_THEME_CSS_DIR . 'marquee.css', [] );
    wp_enqueue_style( 'meanmenu', RORALEX_THEME_CSS_DIR . 'meanmenu.css', [] );
    wp_enqueue_style( 'nice-select', RORALEX_THEME_CSS_DIR . 'nice-select.css', [] );
    wp_enqueue_style( 'owl-carousel', RORALEX_THEME_CSS_DIR . 'owl-carousel.css', [] );
    wp_enqueue_style( 'spacing', RORALEX_THEME_CSS_DIR . 'spacing.css', [] );
    wp_enqueue_style( 'swiper-bundle', RORALEX_THEME_CSS_DIR . 'swiper-bundle.css', [] );



    wp_enqueue_style( 'roralex-core', RORALEX_THEME_CSS_DIR . 'roralex-core.css', [] );
    wp_enqueue_style( 'roralex-unit', RORALEX_THEME_CSS_DIR . 'roralex-unit.css', []);
    wp_enqueue_style( 'roralex-custom', RORALEX_THEME_CSS_DIR . 'roralex-custom.css', [] );


    wp_enqueue_style( 'roralex-style', get_stylesheet_uri() );






    // all js
    wp_enqueue_script( 'bootstrap-bundle', RORALEX_THEME_JS_DIR . 'bootstrap-bundle.js', [ 'jquery' ], '', true );



    wp_enqueue_script( 'waypoints', RORALEX_THEME_JS_DIR . 'waypoints.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'backtotop', RORALEX_THEME_JS_DIR . 'backtotop.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'counterup', RORALEX_THEME_JS_DIR . 'counterup.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'jquery-appear', RORALEX_THEME_JS_DIR . 'jquery.appear.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'jquery-knob', RORALEX_THEME_JS_DIR . 'jquery.knob.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'jquery-scrollbox', RORALEX_THEME_JS_DIR . 'jquery.scrollbox.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'jQueryTab', RORALEX_THEME_JS_DIR . 'jQueryTab.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'magnific-popup', RORALEX_THEME_JS_DIR . 'magnific-popup.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'meanmenu', RORALEX_THEME_JS_DIR . 'meanmenu.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'nice-select', RORALEX_THEME_JS_DIR . 'nice-select.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'owl-carousel', RORALEX_THEME_JS_DIR . 'owl-carousel.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'parallax', RORALEX_THEME_JS_DIR . 'parallax.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'swiper-bundle', RORALEX_THEME_JS_DIR . 'swiper-bundle.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'wow', RORALEX_THEME_JS_DIR . 'wow.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'isotope-pkgd', RORALEX_THEME_JS_DIR . 'isotope-pkgd.js', [ 'imagesloaded' ], false, true );
    wp_enqueue_script( 'roralex-main', RORALEX_THEME_JS_DIR . 'main.js', [ 'jquery' ], time(), true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'roralex_scripts' );

/*
Register Fonts
 */
function roralex_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'roralex' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap';
    }
    return $font_url;
}