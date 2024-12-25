<?php

     $post_url = function_exists('get_field') ? get_field('post_url') : '';

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('tp-postbox mb-60')?>>
     <div class="tp-postbox-thumb mb-35 position-relative br-20">
          <?php the_post_thumbnail(); ?>
               <div class="tp-blog-video">
                    <a class="popup-video" href="<?php echo esc_url($post_url); ?>"><i class="fal fa-play"></i></a>
               </div>
     </div>
     <div class="tp-postbox-content">

       <?php get_template_part('template-parts/blog/blog-meta'); ?>

            <h3 class="tp-postbox-title tp-fs-40 mb-30"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="tpblog__btn">
                     <a class="tp-text-btn" href="<?php the_permalink(); ?>"><?php echo esc_html__('Read More', 'exdos'); ?><i class="far fa-arrow-right"></i></a>
                </div>
    </div>
</article>