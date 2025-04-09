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
    <div class="row">
        <div class="col-log-12">
            <h2>Hello This Is Footer 02.</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, repellat voluptas? Ab molestiae saepe dicta rerum maiores nisi, modi praesentium perspiciatis sed unde eaque magni eligendi eos iusto velit dolore.</p>
        </div>
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