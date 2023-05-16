<?php

	/**
	 * Template part for displaying header layout three
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package roralex
	*/

   // info
   $roralex_topbar_switch = get_theme_mod( 'roralex_topbar_switch', false );
   $roralex_phone_num = get_theme_mod( 'roralex_phone_num', __( '+(088) 234 567 899', 'roralex' ) );
   $roralex_mail_id = get_theme_mod( 'roralex_mail_id', __( 'info@roralex.com', 'roralex' ) );
   $roralex_address = get_theme_mod( 'roralex_address', __( 'Moon ave, New York, 2020 NY US', 'roralex' ) );
   $roralex_address_url = get_theme_mod( 'roralex_address_url', __( 'https://goo.gl/maps/qzqY2PAcQwUz1BYN9', 'roralex' ) );

   // contact button
   $roralex_button_text = get_theme_mod( 'roralex_button_text', __( 'Contact Us', 'roralex' ) );
   $roralex_button_link = get_theme_mod( 'roralex_button_link', __( '#', 'roralex' ) );

   // acc button
   $roralex_acc_button_text = get_theme_mod( 'roralex_acc_button_text', __( 'Login', 'roralex' ) );
   $roralex_acc_button_link = get_theme_mod( 'roralex_acc_button_link', __( '#', 'roralex' ) );

   // header right
   $roralex_search = get_theme_mod( 'roralex_search', false );
   $roralex_header_right = get_theme_mod( 'roralex_header_right', false );
   $roralex_menu_col = $roralex_header_right ? 'col-xl-7 col-lg-10 col-md-6 col-6' : 'col-xl-10 col-lg-10 col-md-6 col-6';

?>

<header id="header-sticky" class="header-intro-version-three-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                <div class="logo-area">
                    <div class="logo">
                        <?php roralex_header_logo(); ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-6 col-6">
                <div
                    class="<?php echo $roralex_header_right ?  esc_attr__('main-menu', 'roralex')  :  esc_attr__('main-menu justify-content-end', 'roralex') ?>">
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <?php roralex_header_menu(); ?>
                        </nav>
                    </div>
                </div>
                <div class="side-menu-icon d-lg-none text-end">
                    <a href="javascript:void(0)" class="info-toggle-btn f-right sidebar-toggle-btn"><i
                            class="fal fa-bars"></i></a>
                </div>
            </div>
            <?php if(!empty($roralex_header_right)) :  ?>
            <div class="col-xl-3 col-lg-4 d-none d-xl-block">
                <div class="location-email-intro">

                    <?php if(!empty($roralex_phone_num)) : ?>
                    <div class="inner-location-email-intro">
                        <div class="inner">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <span class="text"><?php echo esc_html__('Phone', 'roralex'); ?></span>
                        </div>
                        <h5><a
                                href="tel: <?php echo esc_attr($roralex_phone_num) ?>"><?php echo esc_html($roralex_phone_num); ?></a>
                        </h5>
                    </div>
                    <?php endif;?>

                    <?php if(!empty($roralex_mail_id)) : ?>
                    <div class="inner-location-email-intro">
                        <div class="inner">
                            <span><i class="fa-solid fa-envelope"></i></span>
                            <span class="text"><?php echo esc_html__('Get In Touch', 'roralex'); ?></span>
                        </div>
                        <h5><a
                                href="mailto:<?php echo esc_attr($roralex_mail_id);?>"><?php echo esc_html($roralex_mail_id);?></a>
                        </h5>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</header>



<?php get_template_part( 'template-parts/header/header-side-info' ); ?>