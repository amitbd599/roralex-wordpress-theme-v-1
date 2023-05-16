<?php

use \Etn\Utils\Helper;

defined( 'ABSPATH' ) || exit;

$event_options  = get_option("etn_event_options");
$data           = Helper::single_template_options( $single_event_id );

$event_btn_text = get_theme_mod('event_btn_text', __('Enroll Now', 'roralex'));
$event_btn_link = get_theme_mod('event_btn_link', __('#', 'roralex'));

?>

<div class="event__sidebar-widget white-bg mb-20 d-none">
    <div class="events__info">

        <div class="events__info-meta mb-25 d-flex align-items-center justify-content-between">
            <div class="events__info-price">
                <h4 class="sidebar__widget-title"><?php echo esc_html__('Event Info ', "roralex"); ?> </h4>
            </div>
        </div>
        <div class="events__info-content mb-0">
            <ul>
                <?php
			// event date
			if(!isset($event_options["etn_hide_date_from_details"])):
					$separate = !empty($data['event_end_date']) ? ' - ' : '';
			?>
                <li class="d-flex align-items-center">
                    <div class="event__info-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;"
                            xml:space="preserve">
                            <path class="st0"
                                d="M2,6l6-4.7L14,6v7.3c0,0.7-0.6,1.3-1.3,1.3H3.3c-0.7,0-1.3-0.6-1.3-1.3V6z" />
                            <polyline class="st0" points="6,14.7 6,8 10,8 10,14.7 " />
                        </svg>
                    </div>
                    <div class="event__info-item">
                        <h5><span><?php echo esc_html__('Date : ', "roralex"); ?> </span>
                            <?php echo esc_html( $data['event_start_date']  . $separate . $data['event_end_date'] ) ; ?>
                        </h5>
                    </div>
                </li>
                <?php endif; ?>
                <?php
			// event time
			if ( !isset($event_options["etn_hide_time_from_details"]) && ( !empty( $data['event_start_time'] ) || !empty( $data['event_end_time'] ) )) :
					$separate = !empty($data['event_end_time']) ? ' - ' : '';
					?>
                <li class="d-flex align-items-center">
                    <div class="event__info-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;"
                            xml:space="preserve">
                            <circle class="st0" cx="8" cy="8" r="6.7"></circle>
                            <polyline class="st0" points="8,4 8,8 10.7,9.3 "></polyline>
                        </svg>
                    </div>
                    <div class="event__info-item">
                        <h5><span><?php echo esc_html__('Time : ', "roralex"); ?></span>
                            <?php echo esc_html($data['event_start_time'] . $separate . $data['event_end_time']); ?>
                            <?php
					if ( !empty( $data['event_timezone'] ) && !isset($event_options["etn_hide_timezone_from_details"]) ) {
							}
					?>
                        </h5>
                    </div>
                </li>
                <?php endif; ?>
                <?php
			if( !class_exists('Wpeventin_Pro') || get_post_meta($single_event_id, 'etn_event_location_type', true) != 'new_location' ) :
					if ( !isset($event_options["etn_hide_location_from_details"]) && !empty($data['etn_event_location'])) ;
			?>
                <li class="d-flex align-items-center">
                    <div class="event__info-icon">
                        <svg>
                            <circle class="st0" cx="8" cy="8" r="6.7"></circle>
                            <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8"></line>
                            <path class="st0"
                                d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z">
                            </path>
                        </svg>
                    </div>
                    <div class="event__info-item">
                        <h5><span><?php echo esc_html__('Venue : ', "roralex") ?> </span>
                            <?php echo esc_html($data['etn_event_location']);  ?></h5>
                    </div>
                </li>
                <?php endif; ?>
                <?php
			if(!empty($data['etn_deadline_value'])):
			?>
                <li class="d-flex align-items-center">
                    <div class="event__info-icon">
                        <svg>
                            <circle class="st0" cx="8" cy="8" r="6.7"></circle>
                            <line class="st0" x1="1.3" y1="8" x2="14.7" y2="8"></line>
                            <path class="st0"
                                d="M8,1.3c1.7,1.8,2.6,4.2,2.7,6.7c-0.1,2.5-1,4.8-2.7,6.7C6.3,12.8,5.4,10.5,5.3,8C5.4,5.5,6.3,3.2,8,1.3z">
                            </path>
                        </svg>
                    </div>
                    <div class="event__info-item">
                        <h5><span><?php echo esc_html__('Reg. Deadline : ', "roralex"); ?> </span>
                            <?php echo esc_html($data['etn_deadline_value']); ?></h5>
                    </div>
                </li>
                <?php endif; ?>
            </ul>
        </div>
        <?php if(!empty($event_btn_text)) : ?>
        <div class="event__join-btn p-relative z-index-1 mt-35">
            <a href="<?php echo esc_url($event_btn_link); ?>" class="tp-btn text-center w-100">
                <span><?php echo tp_kses($event_btn_text); ?><i class="fa-regular fa-arrow-right"></i> </span>
                <div class="transition"></div>
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>


<div class="event__sidebar-widget white-bg mb-20">

    <div class="event__info">
        <div class="event__info-content mb-35">
            <ul>

               <?php
               // event date
               if(!isset($event_options["etn_hide_date_from_details"])):
                     $separate = !empty($data['event_end_date']) ? ' - ' : '';
               ?>
                <li class="d-flex align-items-center">
                    <div class="event__info-icon">
                        <span>
                        <i class="fal fa-calendar-alt"></i>
                        </span>

                    </div>
                    <div class="event__info-item">
                        <h5><span><?php echo esc_html__('End: ', 'roralex'); ?></span> <?php echo esc_html($data['event_end_date']); ?></h5>
                    </div>
                </li>
                <?php endif; ?>

                <?php
               // event time
               if ( !isset($event_options["etn_hide_time_from_details"]) && ( !empty( $data['event_start_time'] ) || !empty( $data['event_end_time'] ) )) :
                     $separate = !empty($data['event_end_time']) ? ' - ' : '';
               ?>
                <li class="d-flex align-items-center">
                    <div class="event__info-icon">
                        <span>
                           <i class="fa-light fa-clock"></i>
                        </span>
                    </div>
                    <div class="event__info-item">
                        <h5><span><?php echo esc_html__('Time:', 'roralex'); ?></span> <?php echo esc_html($data['event_start_time'] . $separate . $data['event_end_time']); ?></h5>
                    </div>
                </li>
                <?php endif; ?>

                <?php
               if( !class_exists('Wpeventin_Pro') || get_post_meta($single_event_id, 'etn_event_location_type', true) != 'new_location' ) :
                     if ( !isset($event_options["etn_hide_location_from_details"]) && !empty($data['etn_event_location'])) ;
               ?>
                <li class="d-flex align-items-center">
                    <div class="event__info-icon">
                        <span>
                           <i class="fa-light fa-location-dot"></i>
                        </span>
                    </div>
                    <div class="event__info-item">
                        <h5><span><?php echo esc_html__('Venue: ', 'roralex'); ?></span> <?php echo esc_html($data['etn_event_location']);  ?></h5>
                    </div>
                </li>
                <?php endif; ?>

            </ul>
        </div>

        <?php if(!empty($event_btn_text)) : ?>
        <div class="event__join-btn">
            <a href="<?php echo esc_url($event_btn_link); ?>" class="tp-btn text-center w-100"><?php echo tp_kses($event_btn_text); ?> <i class="far fa-arrow-right"></i></a>
        </div>
        <?php endif; ?>

    </div>
</div>