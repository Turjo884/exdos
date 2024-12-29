<?php
    get_header();

    $no_sidebar = is_active_sidebar('blog-sidebar')? '' : 'justify-content-center';
?>

<section class="tp-blogpost-area pt-130 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8"> 
                <div class="error-page text-center">
                <h2>404 error</h2>
                <p>Opps! conent not found</p>
                <button class="tp-about-btn">
                    <a href="<?php echo home_url(); ?>">Go Back To Home</a>
                </button>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
    get_footer();


