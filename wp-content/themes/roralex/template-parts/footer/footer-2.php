<?php

/**
 * Template part for displaying footer layout two
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
$footer_top_space = get_theme_mod( 'roralex_footer_top_space' );
$footer_copyright_switch = get_theme_mod( 'footer_copyright_switch', false );

// bg image
$bg_img = !empty( $roralex_footer_bg_url_from_page['url'] ) ? $roralex_footer_bg_url_from_page['url'] : $footer_bg_img;

// bg color
$bg_color = !empty( $roralex_footer_bg_color_from_page ) ? $roralex_footer_bg_color_from_page : $footer_bg_color;

// footer space
$footer_space = !empty( $roralex_footer_top_space ) ? $roralex_footer_top_space : $footer_top_space;

$footer_columns = 0;
$footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

for ( $num = 1; $num <= $footer_widgets; $num++ ) {
    if ( is_active_sidebar( 'footer-2-' . $num ) ) {
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


<footer class="footer-section-version-one pt-100 mt-50">
    <!-- footer top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="wrapper-left">
                        <h2>Looking For Best Partner <br>
                            For Your Next Construction Works?</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wrapper-right">
                        <button class="btn-shape-normal-outline"><span>More About</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer middle -->
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-lg-4 col-md-6">';
                    dynamic_sidebar( 'footer-2-1' );
                    print '</div>';

                    print '<div class="col-lg-2 col-md-6">';
                    dynamic_sidebar( 'footer-2-2' );
                    print '</div>';

                    print '<div class="col-lg-3 col-md-6">';
                    dynamic_sidebar( 'footer-2-3' );
                    print '</div>';

                    print '<div class="col-lg-3 col-md-6">';
                    dynamic_sidebar( 'footer-2-4' );
                    print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-2-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-2-' . $num );
                            print '</div>';
                        }
                    }
                ?>
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="wrapper-one">
                        <div class="img-file">
                            <img src="./assets/img/common/Logo_White.png" alt="Roralex">
                        </div>
                        <div class="text-file">
                            <h3>Building Construction</h3>
                            <p>Loren ipsum dolor consectetur adipiscing elit sed do eiusmod tempor incididunt know you
                                labore et dolore magna aliqua consectetur adipiscingLoren ipsum dolor consectetur
                                adipiscing
                                elit sed do eiusmod tempor incididunt.</p>
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
                <div class="col-lg-2 col-md-6">
                    <div class="wrapper-two">

                        <div class="text-file">
                            <h3>Important Links</h3>
                        </div>
                        <div class="list-items">
                            <ul>
                                <li><a href="#">Why Choose</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Green Building</a></li>
                                <li><a href="#">Design and Build</a></li>
                                <li><a href="#">Construction Management</a></li>
                                <li><a href="#">Pre-Construction & Planning </a></li>
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
                                <img class="img-fluid" src="./assets/img/project/project-1.png" alt="Roralex">
                            </div>
                            <div class="img">
                                <img class="img-fluid" src="./assets/img/project/project-2.png" alt="Roralex">
                            </div>
                            <div class="img">
                                <img class="img-fluid" src="./assets/img/project/project-3.png" alt="Roralex">
                            </div>
                            <div class="img">
                                <img class="img-fluid" src="./assets/img/project/project-4.png" alt="Roralex">
                            </div>
                            <div class="img">
                                <img class="img-fluid" src="./assets/img/project/project-5.png" alt="Roralex">
                            </div>
                            <div class="img">
                                <img class="img-fluid" src="./assets/img/project/project-6.png" alt="Roralex">
                            </div>

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
                                    <span><i class="fa-sharp fa-regular fa-globe"></i></span>
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
                </div> -->
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
        <?php if ( is_active_sidebar( 'footer-2-1' ) OR is_active_sidebar( 'footer-2-2' ) OR is_active_sidebar( 'footer-2-3' ) OR is_active_sidebar( 'footer-2-4' ) ): ?>
        <div class="footer__top grey-bg-4 pt-95 pb-45" data-top-space="<?php print esc_attr($footer_top_space); ?>"
            data-bg-color="<?php print esc_attr( $bg_color );?>" data-background="<?php print esc_url( $bg_img );?>">
            <div class="container">
                <div class="row">
                    <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">';
                    dynamic_sidebar( 'footer-2-1' );
                    print '</div>';

                    print '<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-2-2' );
                    print '</div>';

                    print '<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-2-3' );
                    print '</div>';

                    print '<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">';
                    dynamic_sidebar( 'footer-2-4' );
                    print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-2-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-2-' . $num );
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