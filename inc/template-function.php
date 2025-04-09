<?php

// exdos header variations
function exdos_headers(){
    $header_variation = function_exists('get_field') ? get_field('header_variation') : '';

    $header_style_kirki= get_theme_mod('header_style_kirki','header_kirki_01');

    if($header_variation == 'header_style_1'){
        get_template_part('template-parts/header/header', '1');
    }
    elseif($header_variation == 'header_style_2'){
        get_template_part('template-parts/header/header', '2');
    }
    else{
        if($header_style_kirki == 'header_kirki_01'){
            get_template_part('template-parts/header/header', '1');
        }
        elseif($header_style_kirki == 'header_kirki_02'){
            get_template_part('template-parts/header/header', '2');
        }
    }
}

// exdos footer variations
function exdos_footers(){
    $footer_options = function_exists('get_field') ? get_field('footer_options') : '';

    $footer_style_kirki= get_theme_mod('footer_style_kirki','footer_kirki_01');

    if($footer_options == 'footer_style_01'){
        get_template_part('template-parts/footer/footer-1');
    }
    elseif($footer_options == 'footer_style_02'){
        get_template_part('template-parts/footer/footer-2');
    }
    else{
        if($footer_style_kirki == 'footer_kirki_01'){
            get_template_part('template-parts/footer/footer-1');
        }
        elseif($footer_style_kirki == 'footer_kirki_02'){
            get_template_part('template-parts/footer/footer-2');
        }
    }
}


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

/**
* Sanitize SVG markup for front-end display.
*
* @param  string $svg SVG markup to sanitize.
* @return string 	  Sanitized markup.
*/
/**
* Sanitize SVG markup for front-end display.
*
* @param  string $svg SVG markup to sanitize.
* @return string 	  Sanitized markup.
*/
function exdos_kses( $allow_tags = '' ) {
	$allowed_html = [
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'path'  => array( 
            'd' => true, 
            'fill' => true,  
            'stroke' => true,  
            'stroke-width' => true,  
            'stroke-linecap' => true,  
            'stroke-linejoin' => true,  
            'opacity' => true,  
        ),
		'a' => [
			'class'    => [],
			'href'    => [],
			'title'    => [],
			'target'    => [],
			'rel'    => [],
		],
         'b' => [],
         'blockquote'  =>  [
            'cite' => [],
         ],
         'cite'                      => [
            'title' => [],
         ],
         'code'                      => [],
         'del'                    => [
            'datetime'   => [],
            'title'      => [],
        ],
         'dd'                     => [],
         'div'                    => [
            'class'   => [],
            'title'   => [],
            'style'   => [],
         ],
         'dl'                     => [],
         'dt'                     => [],
         'em'                     => [],
         'h1'                     => [],
         'h2'                     => [],
         'h3'                     => [],
         'h4'                     => [],
         'h5'                     => [],
         'h6'                     => [],
         'i'                         => [
            'class' => [],
         ],
         'img'                    => [
            'alt'  => [],
            'class'   => [],
            'height' => [],
            'src'  => [],
            'width'   => [],
         ],
         'li'                     => array(
            'class' => array(),
         ),
         'ol'                     => array(
            'class' => array(),
         ),
         'p'                         => array(
            'class' => array(),
         ),
         'q'                         => array(
            'cite'    => array(),
            'title'   => array(),
         ),
         'span'                      => array(
            'class'   => array(),
            'title'   => array(),
            'style'   => array(),
         ),
         'iframe'                 => array(
            'width'         => array(),
            'height'     => array(),
            'scrolling'     => array(),
            'frameborder'   => array(),
            'allow'         => array(),
            'src'        => array(),
         ),
         'strike'                 => array(),
         'br'                     => array(),
         'strong'                 => array(),
	];

	return wp_kses( $allow_tags, $allowed_html );
}