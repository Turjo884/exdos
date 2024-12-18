<?php

// Offcanas items
$phone_number = get_theme_mod('phone_number', esc_html__('+ 4 20 7700 1007', 'exdos'));

$offcanvas_main_title = get_theme_mod('offcanvas_main_title', esc_html__('Hello There', 'exdos'));

$offcanvas_content = get_theme_mod('offcanvas_content', esc_html__('lorem ipsum dollar sit amet', 'exdos'));

$offcanvas_email = get_theme_mod('offcanvas_email', esc_html__('hello@exdos.com', 'exdos'));

$offcanvas_address = get_theme_mod('offcanvas_address', esc_html__('Avenue de Roma 158b, Lisboa', 'exdos'));

$offcanvas_address_url = get_theme_mod('offcanvas_address_url', esc_html__('#', 'exdos'));

// Follow Us Tittle
$follow_us_tittle = get_theme_mod('follow_us_tittle', esc_html__('Follow Us', 'exdos'));

?> 


<div class="tp-offcanvas">
        <div class="tp-offcanvas-wrapper">
            <div class="tp-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                <div class="tp-offcanvas-logo">
                    <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-black.png" alt=""></a>
                </div>
                <div class="tp-offcanvas-close">
                    <button class="tp-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="tp-offcanvas-menu d-xl-none mb-50">
                <nav></nav>
            </div>
            <div class="tp-offcanvas-content mb-50 d-none d-xl-block">

                <?php if(!empty($offcanvas_main_title)) : ?>
                <h2 class="tp-offcanvas-title"><?php echo esc_html($offcanvas_main_title); ?></h2>
                <?php endif; ?>

                <?php if(!empty($offcanvas_content)) : ?>
                <p><?php echo esc_html($offcanvas_content); ?></p>
                <?php endif; ?>

            </div>
            <div class="tp-offcanvas-gallery mb-50">
                <a class="popup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-01.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-01.jpg" alt=""></a>
                <a class="popup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-02.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-02.jpg" alt=""></a>
                <a class="popup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-03.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-03.jpg" alt=""></a>
                <a class="popup-image" href="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-04.jpg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/project/showcase-thumb-04.jpg" alt=""></a>
            </div>
            <div class="tp-offcanvas-info mb-50">
                <h3 class="tp-offcanvas-sm-title"><?php echo esc_html__('Inforamtion' , 'exdos'); ?></h3>

                <?php if(!empty($phone_number)) : ?>
                <span><a href="tel:<?php echo esc_attr($phone_number , ''); ?>"><?php echo esc_html($phone_number , ''); ?></a></span>
                <?php endif; ?>

                <?php if(!empty($offcanvas_email)) : ?>
                <span><a href="mailto: <?php echo esc_attr($offcanvas_email); ?>"><?php echo esc_html($offcanvas_email); ?></a></span>
                <?php endif; ?>

                <?php if(!empty($offcanvas_address)) : ?>
                <span><a href="<?php echo esc_url($offcanvas_address_url); ?>"><?php echo esc_html($offcanvas_address); ?></a></span>
                <?php endif; ?>

            </div>
            <div class="tp-offcanvas-social mb-50">

                <?php if(!empty($follow_us_tittle)) : ?>
                <h3 class="tp-offcanvas-sm-title"><?php echo esc_html($follow_us_tittle); ?></h3>
                <?php endif; ?>
             
                <?php echo exdos_header_social();?>

            </div>
        </div>
    </div>
    <div class="tp-offcanvas-overlay"></div>