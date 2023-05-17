<?php

   /**
    * Template part for displaying header side information
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package roralex
   */

    $roralex_side_hide = get_theme_mod( 'roralex_side_hide', false );
    $roralex_search_hide = get_theme_mod( 'roralex_search_hide', false );


    $roralex_side_logo = get_theme_mod( 'roralex_side_logo', get_template_directory_uri() . '/assets/img/common/Logo_White.png' );
    $roralex_phone_num = get_theme_mod( 'roralex_phone_num', __( '(88-0212-2500)', 'roralex' ) );
    $roralex_mail_id = get_theme_mod( 'roralex_mail_id', __( 'info@roralex.com', 'roralex' ) );

    $roralex_extra_about_text = get_theme_mod( 'roralex_extra_about_text', __( 'Trusted Contraction service!', 'roralex' ) );

    $roralex_extra_map = get_theme_mod( 'roralex_extra_map', __( '#', 'roralex' ) );
    $roralex_contact_title = get_theme_mod( 'roralex_contact_title', __( 'Contact Info', 'roralex' ) );
    $roralex_extra_address = get_theme_mod( 'roralex_extra_address', __( '12/A, Mirnada City Tower, NYC', 'roralex' ) );
    $roralex_extra_phone = get_theme_mod( 'roralex_extra_phone', __( '088889797697', 'roralex' ) );
    $roralex_extra_email = get_theme_mod( 'roralex_extra_email', __( 'support@mail.com ', 'roralex' ) );
?>




<!-- mobile sidebar area start -->
<div class="mobile-sidebar-area">
    <div class="sidebar__wrapper">
        <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="sidebar__content">

            <?php if(!empty($roralex_side_logo)) : ?>
            <div class="sidebar__logo mb-20">
                <a href="index-1.html">
                    <img src="<?php echo esc_url($roralex_side_logo); ?>"
                        alt="<?php echo esc_attr__('logo', 'roralex'); ?>">
                </a>
                <?php if(!empty($roralex_extra_about_text)) : ?>
                <p><?php echo esc_html($roralex_extra_about_text); ?></p>
                <?php endif;?>
            </div>
            <?php endif;?>

            <?php if(!empty($roralex_search_hide)) : ?>
            <div class="sidebar__search mb-25">
                <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <input type="search" name="s" value="<?php print esc_attr( get_search_query() )?>"
                        placeholder="<?php print esc_attr__( 'Find A Construction Service!', 'roralex' );?>">

                    <button type="submit"><i class="far fa-search"></i></button>
                </form>
            </div>
            <?php endif;?>

            <div class="mobile-menu fix"></div>

            <?php if(!empty($roralex_side_hide)) : ?>
            <div class="sidebar__contact  mb-20">
                <h4><?php echo esc_html($roralex_contact_title); ?></h4>
                <div class="sidebar__social">
                    <?php roralex_header_social_profiles(); ?>
                </div>
                <div class="location-email-intro mobile">
                    <?php if(!empty($roralex_phone_num)) : ?>
                    <div class="inner-location-email-intro ">
                        <div class="inner">
                            <span><i class="fa-solid fa-location-dot"></i></span>
                            <span class="text"><?php echo esc_html__('Phone', 'roralex'); ?></span>

                        </div>
                        <h5 class="text"><a
                                href="tel: <?php echo esc_attr($roralex_phone_num) ?>"><?php echo esc_html($roralex_phone_num); ?></a>
                        </h5>
                    </div>
                    <?php endif;?>


                    <?php if(!empty($roralex_mail_id)) : ?>
                    <div class="inner-location-email-intro pt-5">
                        <div class="inner">
                            <span><i class="fa-solid fa-envelope"></i></span>
                            <span class="text"><?php echo esc_html__('Get In Touch', 'roralex'); ?></span>
                        </div>
                        <h5 class="text"><a
                                href="mailto:<?php echo esc_attr($roralex_mail_id);?>"><?php echo esc_html($roralex_mail_id);?></a>
                        </h5>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <?php endif;?>

        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- mobile sidebar area end -->