
<!-- header start  -->
<header>
        <div id="tp-header-sticky" class="tp-header-area tp-transparent-header pl-100 tp-header-border tp-sticky-black">
            <div class="container-fluid p-0">
                <div class="row gx-0 align-items-center">
                    <div class="col-xl-2 col-lg-5 col-md-4 col-6">
                        <div class="tp-logo">
                            <?php echo exdos_header_logo(); ?>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-7 col-md-8 col-6">
                        <div class="tp-header-box d-flex justify-content-xl-between justify-content-end">
                            <div class="tp-main-menu pl-45 d-none d-xl-block">
                                <nav class="tp-mobile-menu-active">
                                    <?php exdos_main_menu(); ?>
                                </nav>
                            </div>
                            <div class="tp-header-right d-flex justify-content-end flex-wrap align-items-center">
                                <div class="tp-header-search d-none d-md-flex">
                                    <button class="d-flex align-items-center tp-search-toggle"><i class="flaticon-search"></i></button>
                                </div>
                                <div class="tp-header-cta d-none d-md-flex">
                                    <div class="tp-header-cta-icon d-flex align-items-center">
                                        <i class="flaticon-phone-book"></i>
                                    </div>
                                    
                                    <?php if(!empty($phone_number)) : ?>

                                    <div class="tp-header-cta-text">
                                        <span><?php echo esc_html__('Free call' , 'exdos'); ?></span>
                                        <h4><?php echo esc_html($phone_number , ''); ?></h4>
                                    </div>
                                </div>

                                    <?php endif; ?>

                                <div class="tp-header-bar">
                                    <button class="tp-offcanvas-toogle"><i class="flaticon-menu"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end  -->
 
    <?php echo get_template_part('template-parts/header/header-search'); ?>                                  
    <?php echo get_template_part('template-parts/header/offcanvas'); ?>