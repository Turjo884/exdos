<?php

// Header Logo
function exdos_header_logo(){

    $header_logo = get_theme_mod('header_logo' , get_template_directory_uri().'/assets/img/logo/logo-white.png');

    ?>
    
    <a href="<?php echo home_url(); ?>">
        <img src="<?php echo esc_url($header_logo); ?>" alt="">
    </a>

    <?php
}

// Footer Logo
function exdos_footer_logo(){

    $footer_logo = get_theme_mod('footer_logo' , get_template_directory_uri().'/assets/img/logo/logo-white.png');

    ?>
    
    <a href="<?php echo home_url(); ?>">
        <img src="<?php echo esc_url($footer_logo); ?>" alt="">
    </a>

    <?php
}

// Footer Copywirght
function exdos_footer_copywright(){

    $footer_copywright = get_theme_mod('footer_copywright' , esc_html__('© Copyright 2024 | Alright reserved exdos by ThemePure' , 'exdos'));
    ?>
    
    <p><?php echo esc_html($footer_copywright); ?></p>

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

// Footer Menu
function exdos_footer_menu(){
    wp_nav_menu(array(
        'theme_location' => 'footer-menu',
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

// exdos_pagination
function exdos_pagination(){
    $pages = paginate_links( array( 
        'type' => 'array',
        'prev_text'    => __('<i class="fal fa-long-arrow-left"></i>','harry'),
        'next_text'    => __('<i class="fal fa-long-arrow-right"></i>','harry'),
    ) );
        if( $pages ) {
        echo '<ul>';
        foreach ( $pages as $page ) {
            echo "<li>$page</li>";
        }
        echo '</ul>';
    }
}


// exdos_tags
function exdos_tags(){
	$post_tags = get_the_tags();
    if ($post_tags) {
        foreach ($post_tags as $tag) {
            ?>
            <a href="<?php echo get_tag_link($tag); ?>"><?php echo esc_html( $tag->name); ?></a>
            <?php
        }
    } else {
        ?>
        <i><?php echo esc_html__('No tags found','exdos'); ?></i>
        <?php
    }
}