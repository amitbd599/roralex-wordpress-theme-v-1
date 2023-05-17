<?php

/**
 * Template part for displaying footer layout one
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

// bg image
$bg_img = !empty( $roralex_footer_bg_url_from_page['url'] ) ? $roralex_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty( $roralex_footer_bg_color_from_page ) ? $roralex_footer_bg_color_from_page : $footer_bg_color;


// footer_columns
$footer_columns = 0;
$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

for ( $num = 1; $num <= $footer_widgets; $num++ ) {
    if ( is_active_sidebar( 'footer-' . $num ) ) {
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
    $footer_class[1] = 'col-lg-3 col-md-6 col-sm-7';
    $footer_class[2] = 'col-lg-3 col-md-3 col-sm-5';
    $footer_class[3] = 'col-lg-3 col-md-3 col-sm-5';
    $footer_class[4] = 'col-lg-3 col-md-6 col-sm-7';
    break;
default:
    $footer_class = 'col-xl-3 col-lg-3 col-md-6';
    break;
}

?>

<!-- footer area start -->


<footer class="footer-section-version-two  mt-50">
    <!-- footer top -->

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="wrapper-one">
                        <div class="img-file">
                            <img src="./assets/img/common/Logo_White.png" alt="">
                        </div>
                        <div class="text-file">
                            <h3>Building Construction</h3>
                            <p>Loren ipsum dolor consectetur adipiscing elit sed do eiusmod tempor incididunt
                                know you
                                labore et dolore magna aliqua consectetur adipiscingLoren ipsum dolor
                                consectetur
                                adipiscing
                                elit sed do eiusmod tempor incididunt.</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="wrapper-two">

                        <div class="text-file">
                            <h3>Our Service</h3>
                        </div>
                        <div class="list-items">
                            <ul>
                                <li><a href="#">Why Choose</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Green Building</a></li>
                                <li><a href="#">Design and Build</a></li>
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Pre-Construction </a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="wrapper-three">

                        <div class="text-file">
                            <h3>Update Information</h3>
                        </div>
                        <div class="input-section">
                            <input type="email" placeholder="Enter You Email">
                            <button class="btn-shape-normal-outline"><span>Submit</span></button>
                        </div>
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
                <div class="col-lg-3 col-md-6">
                    <div class="wrapper-four">

                        <div class="text-file">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="items">
                            <ul>
                                <li>
                                    <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                                    <span>Canis, New York, United States</span>
                                </li>
                                <li>
                                    <span><i class="fa-regular fa-envelope"></i></span>
                                    <span>demo@support.com</span>
                                </li>
                                <li>
                                    <span><i class="fa-sharp fa-solid fa-phone-volume"></i></span>
                                    <span>+88 01888 001122</span>
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-fax"></i></span>
                                    <span>222 89 6320</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- footer bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <hr>
                <div class="inner">
                    <p>RORALEX &#169; 2023. All Rights Reserved</p>
                    <ul>
                        <li><a href="#">
                                Contact Us
                            </a></li>
                        <li><a href="#">
                                FAQ
                            </a></li>
                        <li><a href="#">
                                Privacy
                            </a></li>
                        <li><a href="#">
                                Terms & Conditions
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</footer>

<footer class="d-none">
    <div class="footer__area">
        <?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ): ?>
        <div class="footer__top grey-bg-4 pt-95 pb-45" data-bg-color="<?php print esc_attr( $bg_color );?>"
            data-top-space="<?php print esc_attr($roralex_footer_top_space); ?>px"
            data-background="<?php print esc_url( $bg_img );?>">
            <div class="container">
                <div class="row">
                    <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-lg-3 col-md-6 col-sm-7">';
                    dynamic_sidebar( 'footer-1' );
                    print '</div>';

                    print '<div class=col-lg-3 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-2' );
                    print '</div>';

                    print '<div class="col-lg-3 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-3' );
                    print '</div>';

                    print '<div class="col-lg-3 col-md-6 col-sm-7">';
                    dynamic_sidebar( 'footer-4' );
                    print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-' . $num );
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
                        <div class="col-xxl-12">
                            <div class="footer__copyright text-center">
                                <p><?php print roralex_copyright_text(); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>