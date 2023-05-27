<?php

	/**
	 * Template part for displaying header layout two
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package roralex
	*/

	// info
    $roralex_topbar_switch = get_theme_mod( 'roralex_topbar_switch', false );
    $roralex_top_menu = get_theme_mod( 'roralex_top_menu', __( 'Top Menu Set', 'roralex' ) );


    $roralex_mail_id = get_theme_mod( 'roralex_mail_id', __( 'info@educal.com', 'roralex' ) );
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
    $roralex_menu_col = $roralex_header_right ? 'col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block' : 'col-xxl-10 col-xl-10 col-lg-9 d-none d-lg-block text-end';

?>


<!-- Top Intro Section Start -->





<?php if(!empty($roralex_topbar_switch)) : ?>
<div class="top-header d-none d-lg-block">
    <div class="container ">
        <div class="row">
            <div class="col-lg-8">

                <div class="left-wrapper">
                    <div class="social-icon">
                        <?php roralex_header_social_profiles(); ?>
                    </div>
                    <div class="news-intro simple-marquee-container">
                        <div id="topHeader" class="scroll-text">
                            <?php
                            // wp-query to get all published posts without pagination
                          $allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

                            <?php if ( $allPostsWPQuery->have_posts() ) : ?>

                            <ul>
                                <?php while ( $allPostsWPQuery->have_posts() ) : $allPostsWPQuery->the_post(); ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                            <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                            <p><?php esc_html__( 'There no posts to display.' ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <?php if(!empty($roralex_top_menu)) : ?>
                <div class="right-wrapper">
                    <div class="inner-menu">
                        <div class="inner">

                            <?php echo wp_kses_post($roralex_top_menu); ?>

                        </div>
                    </div>
                </div>
                <?php endif;?>


            </div>
        </div>
    </div>
</div>
<?php endif;?>

<!-- Top Intro Section End -->

<!-- header-area-start -->
<header id="header-sticky" class="header-intro-version-two-area">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                <div class="logo-area">
                    <div class="logo">
                        <?php roralex_header_logo(); ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-6 col-6 ">
                <div class="menu-body">
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
        </div>
    </div>
</header>
<!-- header-area-end -->




<?php get_template_part( 'template-parts/header/header-side-info' ); ?>