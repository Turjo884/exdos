<?php
    $footer_top_switch = get_theme_mod('footer_top_switch' , false);
    $footer_shape_switch = get_theme_mod('footer_shape_switch' , false);
?>

<!-- footer start  -->
<footer class="tp-theme-black-bg p-relative">
<?php if(!empty($footer_shape_switch)) : ?>
<div class="tp-footer-shape-01 p-absolute">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/footer/shape-01.png" alt="">
</div>
<div class="tp-footer-shape-02 p-absolute">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/footer/shape-02.png" alt="">
</div>
<div class="tp-footer-shape-03 p-absolute">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/footer/shape-03.png" alt="">
</div>
<div class="tp-footer-shape-04 p-absolute">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/footer/shape-04.png" alt="">
</div>
<?php endif; ?>

<div class="container">
    <?php if(!empty($footer_top_switch)) : ?>
    <div class="tp-foter-logo-area pt-130">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="footer-logo mb-30">
                    <?php exdos_footer_logo(); ?>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-4 d-none d-md-block">
                <div class="footer-sep mb-30"></div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="tpfooter-social pl-35 mb-30">
                    <?php exdos_header_social(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if(is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) : ?>
    <div class="tp-footer-widget-area pt-70 pb-40">
        <div class="row">

            <?php if(is_active_sidebar('footer-1')) : ?>
            <div class="col-xl-3">
                <?php dynamic_sidebar('footer-1')?>
            </div>
            <?php endif; ?>

            <?php if(is_active_sidebar('footer-2')) : ?>
            <div class="col-xl-3 col-lg-4 col-md-4">
                <?php dynamic_sidebar('footer-2')?>
            </div>
            <?php endif; ?>
                <!-- <div class="tp-footer-widget tp-footer-col-2 mb-50">
                    <h3 class="tp-footer-widget-title mb-20">Los Angels</h3>
                    <div class="footer-content">
                        <span>3587 Limer Street Dalton <br>
                            Palmar 30720</span>
                    </div>
                </div> -->
            <!-- </div> -->
            <?php if(is_active_sidebar('footer-3')) : ?>
            <div class="col-xl-3 col-lg-4 col-md-4">
                <?php dynamic_sidebar('footer-3')?>
            </div>
            <?php endif; ?>

            <?php if(is_active_sidebar('footer-3')) : ?>
            <div class="col-xl-3 col-lg-4 col-md-4">
            <?php dynamic_sidebar('footer-4')?>
            </div>
            <?php endif; ?>

        </div>
        <?php endif; ?>

    </div>
    <div class="tp-footer-copyright-area pt-40 pb-10 p-relative z-index-1">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-4">
                <div class="tp-footer-copyright mb-30 text-md-center text-lg-start">
                    <?php exdos_footer_copywright()?>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="tp-footer-menu text-md-center text-lg-end mb-30 ">
                   <?php exdos_footer_menu(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- footer end  -->