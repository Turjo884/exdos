<?php
    get_header();

    $no_sidebar = is_active_sidebar('blog-sidebar')? '' : 'justify-content-center';
?>

<section class="tp-blogpost-area pt-130 pb-130 single-test">
            <div class="container">
                <div class="row <?php echo esc_attr($no_sidebar); ?>">
                    <div class="col-xl-8 col-lg-8">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part('template-parts/content' ,  get_post_format()); ?>

                        <?php if(comments_open() || get_comments_number() ) : comments_template(); endif?>

                        <?php endwhile; else : ?> //End the while loop
                        
                            <p>Sorry, no posts matched your criteria.</p>

                        <?php endif; ?>
                    
                    </div>

                    <?php if(is_active_sidebar('blog-sidebar')) : ?>
                    <div class="col-xl-4 col-lg-4">
                        <?php get_sidebar(); ?>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>


<?php
    get_footer();


