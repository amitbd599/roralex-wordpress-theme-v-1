<?php

/**
 * Template part for displaying footer layout three
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package roralex
*/

    $footer_bg_img = get_theme_mod( 'roralex_footer_bg' );
    $roralex_footer_logo = get_theme_mod( 'roralex_footer_logo' );
    $roralex_footer_top_space = function_exists('get_field') ? get_field('roralex_footer_top_space') : '0';
    $roralex_copyright_center = $roralex_footer_logo ? 'col-lg-4 offset-lg-4 col-md-6 text-right' : 'col-lg-12 text-center';
    $roralex_footer_bg_url_from_page = function_exists( 'get_field' ) ? get_field( 'roralex_footer_bg' ) : '';
    $roralex_footer_bg_color_from_page = function_exists( 'get_field' ) ? get_field( 'roralex_footer_bg_color' ) : '';
    $footer_bg_color = get_theme_mod( 'roralex_footer_bg_color' );
    $footer_copyright_switch = get_theme_mod( 'footer_copyright_switch', false );

    // bg image
    $bg_img = !empty( $roralex_footer_bg_url_from_page['url'] ) ? $roralex_footer_bg_url_from_page['url'] : $footer_bg_img;

    // bg color
    $bg_color = !empty( $roralex_footer_bg_color_from_page ) ? $roralex_footer_bg_color_from_page : $footer_bg_color;

    // footer_columns
    $footer_columns = 0;
    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        if ( is_active_sidebar( 'footer-3-' . $num ) ) {
            $footer_columns++;
        }
    }

    switch ( $footer_columns ) {
    case '1':
        $footer_class[1] = 'col-lg-12';
        break;
    case '2':
        $footer_class[1] = 'col-lg-6 col-md-6';
        $footer_class[2] = 'col-lg-6 col-md-6';
        break;
    case '3':
        $footer_class[1] = 'col-xl-4 col-lg-6 col-md-5';
        $footer_class[2] = 'col-xl-4 col-lg-6 col-md-7';
        $footer_class[3] = 'col-xl-4 col-lg-6';
        break;
    case '4':
        $footer_class[1] = 'col-lg-3 col-md-6';
        $footer_class[2] = 'col-lg-3 col-md-6';
        $footer_class[3] = 'col-lg-3 col-md-6';
        $footer_class[4] = 'col-lg-3 col-md-6';
        break;
    default:
        $footer_class = 'col-xl-3 col-lg-3 col-md-6';
        break;
    }

    ?>


<footer class="footer-section-version-three ">
    <?php if ( is_active_sidebar('footer-3-1') OR is_active_sidebar('footer-3-2') OR is_active_sidebar('footer-3-3') OR is_active_sidebar('footer-3-4') ): ?>
    <!-- footer middle -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="row">
                    <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-lg-3 col-md-6">';
                    dynamic_sidebar( 'footer-3-1' );
                    print '</div>';

                    print '<div class="col-lg-3 col-md-6">';
                    dynamic_sidebar( 'footer-3-2' );
                    print '</div>';

                    print '<div class="col-lg-3 col-md-6">';
                    dynamic_sidebar( 'footer-3-3' );
                    print '</div>';

                    print '<div class="col-lg-3 col-md-6">';
                    dynamic_sidebar( 'footer-3-4' );
                    print '</div>';

                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-3-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-3-' . $num );
                            print '</div>';
                        }
                    }
                ?>
                </div>

            </div>
        </div>
    </div>

    <?php endif; ?>


    <!-- footer bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p><?php echo roralex_copyright_text(); ?></p>
            </div>
        </div>
    </div>

</footer>