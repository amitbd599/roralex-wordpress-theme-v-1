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
        $footer_class[1] = 'col-lg-4 col-md-6';
        $footer_class[2] = 'col-lg-2 col-md-6';
        $footer_class[3] = 'col-lg-3 col-md-6';
        $footer_class[4] = 'col-lg-3 col-md-6';
        break;
    default:
        $footer_class = 'col-xl-3 col-lg-3 col-md-6';
        break;
    }

    ?>


<footer class="footer-section-version-three ">

    <!-- footer middle -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="row">
                    <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-lg-4 col-md-6">';
                    dynamic_sidebar( 'footer-3-1' );
                    print '</div>';

                    print '<div class="col-lg-2 col-md-6">';
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
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="wrapper-one">
                            <div class="img-file">
                                <img src="./assets/img/common/Logo_White.png" alt="">
                            </div>

                                <h3 class=".footer__widget-title">Building Construction</h3>
                                <p>Loren ipsum dolor consectetur adipiscing elit sed do eiusmod tempor incididunt
                                    know you
                                    labore et dolore magna aliqua consectetur adipiscingLoren ipsum dolor
                                    consectetur
                                    adipiscing
                                    elit sed do eiusmod tempor incididunt.</p>

                            <hr>
                            <div class="social-icon">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="wrapper-two">

                            <div class="text-file">
                                <h3>Important Links</h3>
                            </div>
                            <div class="list-items">
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-circle-small"></i>Why Choose</a></li>
                                    <li><a href="#"><i class="fa-solid fa-circle-small"></i>Team</a></li>
                                    <li><a href="#"><i class="fa-solid fa-circle-small"></i>About Us</a></li>
                                    <li><a href="#"><i class="fa-solid fa-circle-small"></i>Green Building</a></li>
                                    <li><a href="#"><i class="fa-solid fa-circle-small"></i>Design and Build</a>
                                    </li>
                                    <li><a href="#"><i class="fa-solid fa-circle-small"></i>
                                            Management</a></li>
                                    <li><a href="#"><i class="fa-solid fa-circle-small"></i>Pre-Construction </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="wrapper-four">

                            <div class="text-file">
                                <h3>Contact Us</h3>
                            </div>
                            <div class="items">
                                <ul>
                                    <li>
                                        <span>Washington, in Yolo County, <br>
                                            California</span>
                                    </li>
                                    <li>
                                        <span>Phone : +99 236 002 55 </span>
                                    </li>
                                    <li>
                                        <span>Email : demo@admin.com</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="wrapper-three">

                            <div class="text-file">
                                <h3>Gallery Items</h3>
                            </div>
                            <div class="items">
                                <div class="img">
                                    <img class="img-fluid" src="./assets/img/project/project-1.png" alt="">
                                </div>
                                <div class="img">
                                    <img class="img-fluid" src="./assets/img/project/project-2.png" alt="">
                                </div>
                                <div class="img">
                                    <img class="img-fluid" src="./assets/img/project/project-3.png" alt="">
                                </div>
                                <div class="img">
                                    <img class="img-fluid" src="./assets/img/project/project-4.png" alt="">
                                </div>
                                <div class="img">
                                    <img class="img-fluid" src="./assets/img/project/project-5.png" alt="">
                                </div>
                                <div class="img">
                                    <img class="img-fluid" src="./assets/img/project/project-6.png" alt="">
                                </div>

                            </div>

                        </div>
                    </div> -->
                </div>

            </div>
        </div>
    </div>
    <!-- footer bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p><?php echo roralex_copyright_text(); ?></p>
            </div>
        </div>
    </div>

</footer>


<footer class="d-none">
    <div class="footer__area">
        <?php if ( is_active_sidebar('footer-3-1') OR is_active_sidebar('footer-3-2') OR is_active_sidebar('footer-3-3') OR is_active_sidebar('footer-3-4') ): ?>
        <div class="footer__top grey-bg-4 pt-95 pb-45"
            data-top-space="<?php print esc_attr($roralex_footer_top_space); ?>px"
            data-bg-color="<?php print esc_attr( $bg_color );?>" data-background="<?php print esc_url( $bg_img );?>">
            <div class="container">
                <div class="row">
                    <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">';
                    dynamic_sidebar( 'footer-3-1' );
                    print '</div>';

                    print '<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-3-2' );
                    print '</div>';

                    print '<div class="col-xxl-3 col-xl-2 col-lg-2 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-3-3' );
                    print '</div>';

                    print '<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-7">';
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
        <?php endif; ?>
        <div class="footer__bottom grey-bg-4">
            <div class="container">
                <div class="footer__bottom-inner">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="footer__bottom-link">
                                <?php roralex_footer_menu(); ?>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="footer__social footer__social-3 text-md-end">
                                <?php roralex_footer_social_profiles(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>