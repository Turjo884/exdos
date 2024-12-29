<?php
    get_header();

    $no_sidebar = is_active_sidebar('blog-sidebar')? '' : 'justify-content-center';
?>

<section class="tp-blogpost-area pt-130 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part('template-parts/content' ,  get_post_format()); ?>

                        <?php endwhile; else : ?> //End the while loop
                        
                            <p>Sorry, no posts matched your criteria.</p>

                        <?php endif; ?>
                        
                        <div class="tp-pagination mb-60">
                            <?php exdos_pagination(); ?>
                        </div>
                    </div>

                 
                </div>
            </div>
        </section>


<?php
    get_footer();

