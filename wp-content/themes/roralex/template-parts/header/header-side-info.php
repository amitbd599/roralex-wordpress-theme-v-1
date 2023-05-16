<?php

   /**
    * Template part for displaying header side information
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package roralex
   */

    $roralex_side_hide = get_theme_mod( 'roralex_side_hide', false );
    $roralex_search = get_theme_mod( 'roralex_search', false );
    $roralex_side_logo = get_theme_mod( 'roralex_side_logo', get_template_directory_uri() . '/assets/img/logo/logo.png' );
    $roralex_extra_about_text = get_theme_mod( 'roralex_extra_about_text', __( 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system and expound the actual teachings of the great explore', 'roralex' ) );

    $roralex_extra_map = get_theme_mod( 'roralex_extra_map', __( '#', 'roralex' ) );
    $roralex_contact_title = get_theme_mod( 'roralex_contact_title', __( 'Contact Info', 'roralex' ) );
    $roralex_extra_address = get_theme_mod( 'roralex_extra_address', __( '12/A, Mirnada City Tower, NYC', 'roralex' ) );
    $roralex_extra_phone = get_theme_mod( 'roralex_extra_phone', __( '088889797697', 'roralex' ) );
    $roralex_extra_email = get_theme_mod( 'roralex_extra_email', __( 'support@mail.com ', 'roralex' ) );
?>

<!-- offcanvas area start -->

<div class="mobile-sidebar-area">
      <div class="sidebar__wrapper">
         <div class="sidebar__close">
            <button class="sidebar__close-btn" id="sidebar__close-btn">
               <i class="fal fa-times"></i>
            </button>
         </div>
         <div class="sidebar__content">
            <div class="sidebar__logo mb-20">
               <a href="index-1.html">
                  <img src="./assets/img/common/Logo_Black.png" alt="logo">
               </a>
               <p>Trusted Contraction service!</p>
            </div>
            <div class="sidebar__search mb-25">
               <form action="#">
                  <input type="text" placeholder="Find A Construction Service!">
                  <button type="submit"><i class="far fa-search"></i></button>
               </form>
            </div>
            <div class="mobile-menu fix"></div>
            <div class="sidebar__contact  mb-20">
               <h4>Contact With US</h4>
               <div class="sidebar__social">
                  <ul>
                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                     <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
               </div>
               <div class="location-email-intro mobile">
                  <div class="inner-location-email-intro pr-30">
                     <div class="inner">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <span class="text">Location</span>
                     </div>
                     <h5 class="text">4043 Riverside Augusta</h5>
                  </div>
                  <div class="inner-location-email-intro pt-5">
                     <div class="inner">
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <span class="text">Get In Touch</span>
                     </div>
                     <h5 class="text">info@roralex.com</h5>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   <div class="body-overlay"></div>


<div class="offcanvas__area d-none">
   <div class="modal fade" id="offcanvasmodal" tabindex="-1" aria-labelledby="offcanvasmodal" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
              <div class="offcanvas__wrapper">
                 <div class="offcanvas__content">
                    <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                       <?php if ( !empty( $roralex_side_logo ) ): ?>
                       <div class="offcanvas__logo logo">
                          <a href="<?php print esc_url( home_url( '/' ) );?>">
                          <img src="<?php print esc_url($roralex_side_logo); ?>" alt="<?php echo esc_attr__('logo','roralex'); ?>">
                          </a>
                       </div>
                       <?php endif;?>

                       <div class="offcanvas__close">
                          <button class="offcanvas__close-btn" data-bs-toggle="modal" data-bs-target="#offcanvasmodal">
                             <i class="fal fa-times"></i>
                          </button>
                       </div>

                    </div>

                    <?php if ( !empty( $roralex_search ) ): ?>
                    <div class="offcanvas__search mb-25">
                       <form action="<?php print esc_url( home_url( '/' ) );?>">
                          <input type="text" name="s" value="<?php print esc_attr( get_search_query() )?>" placeholder="<?php print esc_attr__( 'What are you searching for?', 'roralex' );?>">
                          <button type="submit" ><i class="far fa-search"></i></button>
                       </form>
                    </div>
                    <?php endif;?>

                    <div class="mobile-menu fix"></div>


                    <?php if ( !empty( $roralex_side_hide ) ): ?>
                    <?php if ( !empty( $roralex_extra_about_text ) ): ?>
                    <div class="offcanvas__text d-none d-lg-block">
                       <p><?php echo esc_html($roralex_extra_about_text); ?></p>
                    </div>
                    <?php endif;?>

                    <?php if ( !empty( $roralex_extra_map ) ): ?>
                    <div class="offcanvas__map d-none d-lg-block mb-15">
                        <iframe src="<?php echo roralex_kses($roralex_extra_map); ?>"></iframe>
                    </div>
                    <?php endif;?>

                    <div class="offcanvas__contact mt-30 mb-20">
                     <?php if ( !empty( $roralex_contact_title ) ): ?>
                       <h4><?php echo esc_html($roralex_contact_title); ?></h4>
                     <?php endif;?>
                       <ul>
                        <?php if ( !empty( $roralex_extra_address ) ): ?>
                          <li class="d-flex align-items-center">
                             <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-map-marker-alt"></i>
                             </div>
                             <div class="offcanvas__contact-text">
                                <?php echo roralex_kses($roralex_extra_address); ?>
                             </div>
                          </li>
                          <?php endif;?>
                          <?php if ( !empty( $roralex_extra_phone ) ): ?>
                          <li class="d-flex align-items-center">
                             <div class="offcanvas__contact-icon mr-15">
                                <i class="far fa-phone"></i>
                             </div>
                             <div class="offcanvas__contact-text">
                                <?php echo roralex_kses($roralex_extra_phone); ?>
                             </div>
                          </li>
                          <?php endif;?>
                          <?php if ( !empty( $roralex_extra_email ) ): ?>
                          <li class="d-flex align-items-center">
                             <div class="offcanvas__contact-icon mr-15">
                                <i class="fal fa-envelope"></i>
                             </div>
                             <div class="offcanvas__contact-text">
                                <?php echo roralex_kses($roralex_extra_email); ?>
                             </div>
                          </li>
                          <?php endif;?>
                       </ul>
                    </div>

                    <div class="offcanvas__social">
                       <?php roralex_header_social_profiles(); ?>
                    </div>

                    <?php endif;?>
                 </div>
              </div>
           </div>
       </div>
   </div>
</div>
