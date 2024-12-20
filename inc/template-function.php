<?php

// Header Social Logo
function exdos_header_logo(){

    $header_logo = get_theme_mod('header_logo' , get_template_directory_uri().'/assets/img/logo/logo-white.png');

    ?>
    
    <a href="<?php echo home_url(); ?>">
        <img src="<?php echo esc_url($header_logo); ?>" alt="">
    </a>

    <?php
}

// Menu
function exdos_main_menu(){
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container' => '',
        'menu_class' => 'exdos-menus',
        'fallback_cb' => 'Exdos_Walker_Nav_Menu::fallback',
        'walker' => new Exdos_Walker_Nav_Menu,
      ));
}


// Socia media
function exdos_header_social(){

    // social icon dynamic variable part
    $social_fb = get_theme_mod('social_fb', esc_html__('#', 'exdos'));
    $social_tw = get_theme_mod('social_tw', esc_html__('#', 'exdos'));
    $social_in = get_theme_mod('social_in', esc_html__('#', 'exdos'));
    $social_insta = get_theme_mod('social_insta', esc_html__('#', 'exdos'));
    

    ?>

        <?php if(!empty($social_fb)) : ?>
        <a target="_blank" href="<?php echo esc_url($social_fb); ?>"><i class="fab fa-facebook-f"></i></a>
        <?php endif; ?>

        <?php if(!empty($social_tw)) : ?>
        <a target="_blank" href="<?php echo esc_url($social_tw); ?>"><i class="fab fa-twitter"></i></a>
        <?php endif; ?>

        <?php if(!empty($social_in)) : ?>
        <a target="_blank" href="<?php echo esc_url($social_in); ?>"><i class="fab fa-linkedin-in"></i></a>
        <?php endif; ?>

        <?php if(!empty($social_insta)) : ?>
        <a target="_blank" href="<?php echo esc_url($social_insta); ?>"><i class="fab fa-instagram"></i></a>
        <?php endif; ?> 

    <?php
}