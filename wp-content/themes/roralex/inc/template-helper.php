<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package roralex
 */

/**
 *
 * roralex header
 */

function roralex_check_header() {
    $roralex_header_style = function_exists( 'get_field' ) ? get_field( 'header_style' ) : NULL;
    $roralex_default_header_style = get_theme_mod( 'choose_default_header', 'header-style-1' );

    if ( $roralex_header_style == 'header-style-1' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-1' );
    }
    elseif ( $roralex_header_style == 'header-style-2' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-2' );
    }
    elseif ( $roralex_header_style == 'header-style-3' && empty($_GET['s']) ) {
        get_template_part( 'template-parts/header/header-3' );
    }
    else {

        /** default header style **/
        if ( $roralex_default_header_style == 'header-style-2' ) {
            get_template_part( 'template-parts/header/header-2' );
        }
        elseif ( $roralex_default_header_style == 'header-style-3' ) {
            get_template_part( 'template-parts/header/header-3' );
        }
        else {
            get_template_part( 'template-parts/header/header-1' );
        }
    }

}
add_action( 'roralex_header_style', 'roralex_check_header', 10 );


/**
 * [roralex_header_lang description]
 * @return [type] [description]
 */
function roralex_header_lang_defualt() {
    $roralex_header_lang = get_theme_mod( 'roralex_header_lang', false );
    if ( $roralex_header_lang ): ?>

<ul>
    <li><a href="javascript:void(0)" class="lang__btn"><?php print esc_html__( 'English', 'roralex' );?> <i
                class="fal fa-angle-down"></i></a>
        <?php do_action( 'roralex_language' );?>
    </li>
</ul>

<?php endif;?>
<?php
}

/**
 * [roralex_language_list description]
 * @return [type] [description]
 */
function _roralex_language( $mar ) {
    return $mar;
}
function roralex_language_list() {

    $mar = '';
    $languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );
    if ( !empty( $languages ) ) {
        $mar = '<ul>';
        foreach ( $languages as $lan ) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul>';
        $mar .= '<li><a href="#">' . esc_html__( 'English', 'roralex' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'Bangla', 'roralex' ) . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__( 'French', 'roralex' ) . '</a></li>';
        $mar .= ' </ul>';
    }
    print _roralex_language( $mar );
}
add_action( 'roralex_language', 'roralex_language_list' );


// header logo
function roralex_header_logo() { ?>
<?php
        $roralex_logo = get_template_directory_uri() . '/assets/img/common/Logo_White.png';

        $roralex_site_logo = get_theme_mod( 'logo', $roralex_logo );
      ?>

<a href="<?php print esc_url( home_url( '/' ) );?>">
    <img src="<?php print esc_url( $roralex_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'roralex' );?>" />
</a>


<?php
}

// header logo
function roralex_header_sticky_logo() {?>
<?php
        $roralex_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-black.png';
        $roralex_secondary_logo = get_theme_mod( 'seconday_logo', $roralex_logo_black );
    ?>
<a class="sticky-logo" href="<?php print esc_url( home_url( '/' ) );?>">
    <img src="<?php print esc_url( $roralex_secondary_logo );?>" alt="<?php print esc_attr__( 'logo', 'roralex' );?>" />
</a>
<?php
}

function roralex_mobile_logo() {
    // side info
    $roralex_mobile_logo_hide = get_theme_mod( 'roralex_mobile_logo_hide', false );

    $roralex_site_logo = get_theme_mod( 'logo', get_template_directory_uri() . '/assets/img/logo/logo.png' );

    ?>

<?php if ( !empty( $roralex_mobile_logo_hide ) ): ?>
<div class="side__logo mb-25">
    <a class="sideinfo-logo" href="<?php print esc_url( home_url( '/' ) );?>">
        <img src="<?php print esc_url( $roralex_site_logo );?>" alt="<?php print esc_attr__( 'logo', 'roralex' );?>" />
    </a>
</div>
<?php endif;?>



<?php }

/**
 * [roralex_header_social_profiles description]
 * @return [type] [description]
 */
function roralex_header_social_profiles() {
    $roralex_topbar_fb_url = get_theme_mod( 'roralex_topbar_fb_url', __( '#', 'roralex' ) );
    $roralex_topbar_twitter_url = get_theme_mod( 'roralex_topbar_twitter_url', __( '#', 'roralex' ) );
    $roralex_topbar_instagram_url = get_theme_mod( 'roralex_topbar_instagram_url', __( '#', 'roralex' ) );
    $roralex_topbar_linkedin_url = get_theme_mod( 'roralex_topbar_linkedin_url', __( '#', 'roralex' ) );
    $roralex_topbar_youtube_url = get_theme_mod( 'roralex_topbar_youtube_url', __( '#', 'roralex' ) );
    ?>
<ul>
    <?php if ( !empty( $roralex_topbar_fb_url ) ): ?>
    <li><a href="<?php print esc_url( $roralex_topbar_fb_url );?>"><i class="fab fa-facebook-f"></i></a></li>
    <?php endif;?>

    <?php if ( !empty( $roralex_topbar_twitter_url ) ): ?>
    <li><a href="<?php print esc_url( $roralex_topbar_twitter_url );?>"><i class="fab fa-twitter"></i></a></li>
    <?php endif;?>

    <?php if ( !empty( $roralex_topbar_instagram_url ) ): ?>
    <li><a href="<?php print esc_url( $roralex_topbar_instagram_url );?>"><i class="fab fa-instagram"></i></a></li>
    <?php endif;?>

    <?php if ( !empty( $roralex_topbar_linkedin_url ) ): ?>
    <li><a href="<?php print esc_url( $roralex_topbar_linkedin_url );?>"><i class="fab fa-linkedin"></i></a></li>
    <?php endif;?>

    <?php if ( !empty( $roralex_topbar_youtube_url ) ): ?>
    <li><a href="<?php print esc_url( $roralex_topbar_youtube_url );?>"><i class="fab fa-youtube"></i></a></li>
    <?php endif;?>
</ul>

<?php
}

function roralex_footer_social_profiles() {
    $roralex_footer_fb_url = get_theme_mod( 'roralex_footer_fb_url', __( '#', 'roralex' ) );
    $roralex_footer_twitter_url = get_theme_mod( 'roralex_footer_twitter_url', __( '#', 'roralex' ) );
    $roralex_footer_instagram_url = get_theme_mod( 'roralex_footer_instagram_url', __( '#', 'roralex' ) );
    $roralex_footer_linkedin_url = get_theme_mod( 'roralex_footer_linkedin_url', __( '#', 'roralex' ) );
    $roralex_footer_youtube_url = get_theme_mod( 'roralex_footer_youtube_url', __( '#', 'roralex' ) );
    ?>

<ul>
    <?php if ( !empty( $roralex_footer_fb_url ) ): ?>
    <li>
        <a href="<?php print esc_url( $roralex_footer_fb_url );?>">
            <i class="fab fa-facebook-f"></i>
        </a>
    </li>
    <?php endif;?>

    <?php if ( !empty( $roralex_footer_twitter_url ) ): ?>
    <li>
        <a href="<?php print esc_url( $roralex_footer_twitter_url );?>">
            <i class="fab fa-twitter"></i>
        </a>
    </li>
    <?php endif;?>

    <?php if ( !empty( $roralex_footer_instagram_url ) ): ?>
    <li>
        <a href="<?php print esc_url( $roralex_footer_instagram_url );?>">
            <i class="fab fa-instagram"></i>
        </a>
    </li>
    <?php endif;?>

    <?php if ( !empty( $roralex_footer_linkedin_url ) ): ?>
    <li>
        <a href="<?php print esc_url( $roralex_footer_linkedin_url );?>">
            <i class="fab fa-linkedin"></i>
        </a>
    </li>
    <?php endif;?>

    <?php if ( !empty( $roralex_footer_youtube_url ) ): ?>
    <li>
        <a href="<?php print esc_url( $roralex_footer_youtube_url );?>">
            <i class="fab fa-youtube"></i>
        </a>
    </li>
    <?php endif;?>
</ul>
<?php
}

/**
 * [roralex_header_menu description]
 * @return [type] [description]
 */
function roralex_header_menu() {
    ?>
<?php
        wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'Roralex_Navwalker_Class::fallback',
            'walker'         => new Roralex_Navwalker_Class,
        ] );
    ?>
<?php
}

/**
 * [roralex_header_menu description]
 * @return [type] [description]
 */
function roralex_mobile_menu() {
    ?>
<?php
        $roralex_menu = wp_nav_menu( [
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'menu_id'        => 'mobile-menu-active',
            'echo'           => false,
        ] );

    $roralex_menu = str_replace( "menu-item-has-children", "menu-item-has-children has-children", $roralex_menu );
        echo wp_kses_post( $roralex_menu );
    ?>
<?php
}

/**
 * [roralex_search_menu description]
 * @return [type] [description]
 */
function roralex_header_search_menu() {
    ?>
<?php
        wp_nav_menu( [
            'theme_location' => 'header-search-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'Roralex_Navwalker_Class::fallback',
            'walker'         => new Roralex_Navwalker_Class,
        ] );
    ?>
<?php
}

/**
 * [roralex_footer_menu description]
 * @return [type] [description]
 */
function roralex_footer_menu() {
    wp_nav_menu( [
        'theme_location' => 'footer-menu',
        'menu_class'     => 'm-0',
        'container'      => '',
        'fallback_cb'    => 'Roralex_Navwalker_Class::fallback',
        'walker'         => new Roralex_Navwalker_Class,
    ] );
}


/**
 * [roralex_category_menu description]
 * @return [type] [description]
 */
function roralex_category_menu() {
    wp_nav_menu( [
        'theme_location' => 'category-menu',
        'menu_class'     => 'cat-submenu m-0',
        'container'      => '',
        'fallback_cb'    => 'Roralex_Navwalker_Class::fallback',
        'walker'         => new Roralex_Navwalker_Class,
    ] );
}

/**
 *
 * roralex footer
 */
add_action( 'roralex_footer_style', 'roralex_check_footer', 10 );

function roralex_check_footer() {
    $roralex_footer_style = function_exists( 'get_field' ) ? get_field( 'footer_style' ) : NULL;
    $roralex_default_footer_style = get_theme_mod( 'choose_default_footer', 'footer-style-1' );

    if ( $roralex_footer_style == 'footer-style-1' ) {
        get_template_part( 'template-parts/footer/footer-1' );
    }
    elseif ( $roralex_footer_style == 'footer-style-2' ) {
        get_template_part( 'template-parts/footer/footer-2' );
    }
    elseif ( $roralex_footer_style == 'footer-style-3' ) {
        get_template_part( 'template-parts/footer/footer-3' );
    }
    elseif ( $roralex_footer_style == 'footer-style-4' ) {
        get_template_part( 'template-parts/footer/footer-4' );
    } else {

        /** default footer style **/
        if ( $roralex_default_footer_style == 'footer-style-2' ) {
            get_template_part( 'template-parts/footer/footer-2' );
        }
        elseif ( $roralex_default_footer_style == 'footer-style-3' ) {
            get_template_part( 'template-parts/footer/footer-3' );
        }
        elseif ( $roralex_default_footer_style == 'footer-style-4' ) {
            get_template_part( 'template-parts/footer/footer-4' );
        }
        else {
            get_template_part( 'template-parts/footer/footer-1' );
        }

    }
}

// roralex_copyright_text
function roralex_copyright_text() {
   print get_theme_mod( 'roralex_copyright', esc_html__( '© 2022 Roralex, All Rights Reserved. Design By Theme Pure', 'roralex' ) );
}



/**
 *
 * pagination
 */
if ( !function_exists( 'roralex_pagination' ) ) {

    function _roralex_pagi_callback( $pagination ) {
        return $pagination;
    }

    //page navegation
    function roralex_pagination( $prev, $next, $pages, $args ) {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ( $pages == '' ) {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if ( !$pages ) {
                $pages = 1;
            }

        }

        $pagination = [
            'base'      => add_query_arg( 'paged', '%#%' ),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ( $wp_rewrite->using_permalinks() ) {
            $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
        }

        if ( !empty( $wp_query->query_vars['s'] ) ) {
            $pagination['add_args'] = ['s' => get_query_var( 's' )];
        }

        $pagi = '';
        if ( paginate_links( $pagination ) != '' ) {
            $paginations = paginate_links( $pagination );
            $pagi .= '<ul>';
            foreach ( $paginations as $key => $pg ) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _roralex_pagi_callback( $pagi );
    }
}


// header top bg color
function roralex_breadcrumb_bg_color() {
    $color_code = get_theme_mod( 'roralex_breadcrumb_bg_color', '#222' );
    wp_enqueue_style( 'roralex-custom', RORALEX_THEME_CSS_DIR . 'roralex-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-bg.gray-bg{ background: " . $color_code . "}";

        wp_add_inline_style( 'roralex-breadcrumb-bg', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'roralex_breadcrumb_bg_color' );

// breadcrumb-spacing top
function roralex_breadcrumb_spacing() {
    $padding_px = get_theme_mod( 'roralex_breadcrumb_spacing', '160px' );
    wp_enqueue_style( 'roralex-custom', RORALEX_THEME_CSS_DIR . 'roralex-custom.css', [] );
    if ( $padding_px != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-top: " . $padding_px . "}";

        wp_add_inline_style( 'roralex-breadcrumb-top-spacing', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'roralex_breadcrumb_spacing' );

// breadcrumb-spacing bottom
function roralex_breadcrumb_bottom_spacing() {
    $padding_px = get_theme_mod( 'roralex_breadcrumb_bottom_spacing', '160px' );
    wp_enqueue_style( 'roralex-custom', RORALEX_THEME_CSS_DIR . 'roralex-custom.css', [] );
    if ( $padding_px != '' ) {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-bottom: " . $padding_px . "}";

        wp_add_inline_style( 'roralex-breadcrumb-bottom-spacing', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'roralex_breadcrumb_bottom_spacing' );

// scrollup
function roralex_scrollup_switch() {
    $scrollup_switch = get_theme_mod( 'roralex_scrollup_switch', false );
    wp_enqueue_style( 'roralex-custom', RORALEX_THEME_CSS_DIR . 'roralex-custom.css', [] );
    if ( $scrollup_switch ) {
        $custom_css = '';
        $custom_css .= "#scrollUp{ display: none !important;}";

        wp_add_inline_style( 'roralex-scrollup-switch', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'roralex_scrollup_switch' );

// theme color
function roralex_custom_color() {
    $color_code = get_theme_mod( 'roralex_color_option', '#2b4eff' );
    wp_enqueue_style( 'roralex-custom', RORALEX_THEME_CSS_DIR . 'roralex-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".demo-class { border-color: " . $color_code . "}";
        $custom_css .= ".demo-class { border-left-color: " . $color_code . "}";
        $custom_css .= ".demo-class { stroke: " . $color_code . "}";
        $custom_css .= ".demo-class { border-color: " . $color_code . "}";
        wp_add_inline_style( 'roralex-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'roralex_custom_color' );


// theme color
function roralex_custom_color_primary() {
    $color_code = get_theme_mod( 'roralex_color_option_2', '#f2277e' );
    wp_enqueue_style( 'roralex-custom', RORALEX_THEME_CSS_DIR . 'roralex-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".demo-class { border-left-color: " . $color_code . "}";
        wp_add_inline_style( 'roralex-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'roralex_custom_color_primary' );

// theme color
function roralex_custom_color_scrollup() {
    $color_code = get_theme_mod( 'roralex_color_scrollup', '#2b4eff' );
    wp_enqueue_style( 'roralex-custom', RORALEX_THEME_CSS_DIR . 'roralex-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".demo-class { color: " . $color_code . "}";
        $custom_css .= ".demo-class { stroke: " . $color_code . "}";
        wp_add_inline_style( 'roralex-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'roralex_custom_color_scrollup' );

// theme color
function roralex_custom_color_secondary() {
    $color_code = get_theme_mod( 'roralex_color_option_3', '#30a820' );
    wp_enqueue_style( 'roralex-custom', RORALEX_THEME_CSS_DIR . 'roralex-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".asdf { border-color: " . $color_code . "}";
        wp_add_inline_style( 'roralex-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'roralex_custom_color_secondary' );

// theme color
function roralex_custom_color_secondary_2() {
    $color_code = get_theme_mod( 'roralex_color_option_3_2', '#ffb352' );
    wp_enqueue_style( 'roralex-custom', RORALEX_THEME_CSS_DIR . 'roralex-custom.css', [] );
    if ( $color_code != '' ) {
        $custom_css = '';
        $custom_css .= ".demo-class { background-color: " . $color_code . "}";

        $custom_css .= ".demo-class { color: " . $color_code . "}";

        $custom_css .= ".demo-class { border-color: " . $color_code . "}";
        wp_add_inline_style( 'roralex-custom', $custom_css );
    }
}
add_action( 'wp_enqueue_scripts', 'roralex_custom_color_secondary_2' );


// roralex_kses_intermediate
function roralex_kses_intermediate( $string = '' ) {
    return wp_kses( $string, roralex_get_allowed_html_tags( 'intermediate' ) );
}

function roralex_get_allowed_html_tags( $level = 'basic' ) {
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}



// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function roralex_kses($raw){

   $allowed_tags = array(
      'a'                         => array(
         'class'   => array(),
         'href'    => array(),
         'rel'  => array(),
         'title'   => array(),
         'target' => array(),
      ),
      'abbr'                      => array(
         'title' => array(),
      ),
      'b'                         => array(),
      'blockquote'                => array(
         'cite' => array(),
      ),
      'cite'                      => array(
         'title' => array(),
      ),
      'code'                      => array(),
      'del'                    => array(
         'datetime'   => array(),
         'title'      => array(),
      ),
      'dd'                     => array(),
      'div'                    => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'dl'                     => array(),
      'dt'                     => array(),
      'em'                     => array(),
      'h1'                     => array(),
      'h2'                     => array(),
      'h3'                     => array(),
      'h4'                     => array(),
      'h5'                     => array(),
      'h6'                     => array(),
      'i'                         => array(
         'class' => array(),
      ),
      'img'                    => array(
         'alt'  => array(),
         'class'   => array(),
         'height' => array(),
         'src'  => array(),
         'width'   => array(),
      ),
      'li'                     => array(
         'class' => array(),
      ),
      'ol'                     => array(
         'class' => array(),
      ),
      'p'                         => array(
         'class' => array(),
      ),
      'q'                         => array(
         'cite'    => array(),
         'title'   => array(),
      ),
      'span'                      => array(
         'class'   => array(),
         'title'   => array(),
         'style'   => array(),
      ),
      'iframe'                 => array(
         'width'         => array(),
         'height'     => array(),
         'scrolling'     => array(),
         'frameborder'   => array(),
         'allow'         => array(),
         'src'        => array(),
      ),
      'strike'                 => array(),
      'br'                     => array(),
      'strong'                 => array(),
      'data-wow-duration'            => array(),
      'data-wow-delay'            => array(),
      'data-wallpaper-options'       => array(),
      'data-stellar-background-ratio'   => array(),
      'ul'                     => array(
         'class' => array(),
      ),
      'svg' => array(
           'class' => true,
           'aria-hidden' => true,
           'aria-labelledby' => true,
           'role' => true,
           'xmlns' => true,
           'width' => true,
           'height' => true,
           'viewbox' => true, // <= Must be lower case!
       ),
       'g'     => array( 'fill' => true ),
       'title' => array( 'title' => true ),
       'path'  => array( 'd' => true, 'fill' => true,  ),
      );

   if (function_exists('wp_kses')) { // WP is here
      $allowed = wp_kses($raw, $allowed_tags);
   } else {
      $allowed = $raw;
   }

   return $allowed;
}