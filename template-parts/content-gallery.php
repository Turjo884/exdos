<?php

     $gallery = function_exists('get_field') ? get_field('post_gallery') : '';

?>


<?php if(is_single()) : ?>
     <article id="post-<?php the_ID(); ?>" <?php post_class('tp-postbox mb-60')?>>
                              <!-- post image -->
                              <?php if(!empty($gallery)) : ?>
                                   <div class="tp-postbox-thumb mb-35 position-relative br-20">
                                        <div class="swiper tp-blog-active">
                                             <div class="swiper-wrapper">

                                             <?php if (is_array($gallery) && !empty($gallery)) : ?>
                                                  <?php foreach ($gallery as $item) : ?>
                                                       <div class="swiper-slide br-20">
                                                            <img src="<?php echo esc_url($item['url']); ?>" alt="">
                                                       </div>
                                                  <?php endforeach; ?>
                                             <?php else : ?>
                                                  <p>No items found in the gallery.</p>
                                             <?php endif; ?>

                                             </div>
                                        </div>

                                        <div class="tp-blog-slider-arrow">
                                             <div class="tp-swiper-blog-button-prev tp-swiper-blog-button"><i class="flaticon-right-arrow"></i></div>
                                             <div class="tp-swiper-blog-button-next tp-swiper-blog-button"><i class="flaticon-right-arrow"></i></div>
                                        </div>
                                   </div>
                              <?php endif; ?>

                            <!-- post metatag -->
                            <div class="tp-postbox-content">
                              <?php get_template_part('template-parts/blog/blog-meta'); ?>

                                   <!-- post title -->
                                   <h3 class="tp-postbox-title tp-fs-40 mb-30"><?php the_title(); ?></h3>

                              <!-- post description -->
                              <div class="tp-postbox-details">
                                   <?php the_content(); ?>
                 

                    <div class="tp-postbox-tag-wrapper mt-50">
                    <div class="row align-items-center">
                         <div class="col-lg-7">
                              <div class="tp-postbox-tag">
                                   <span><?php echo esc_html__('Tags:','exdos'); ?></span>
                                   <?php exdos_tags(); ?>
                              </div>
                         </div>
                         <div class="col-lg-5">  
                              <div class="tp-postbox-social text-start text-md-end">
                              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank"> <i class="fab fa-facebook-f"></i></a>

                              <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode($post_title); ?>" target="_blank">
                                   <i class="fab fa-twitter"></i>
                              </a>

                              <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode($post_title); ?>" target="_blank">
                                   <i class="fab fa-linkedin-in"></i>
                              </a>

                              <a href="https://www.instagram.com/" target="_blank">
                                   <i class="fab fa-instagram"></i>
                              </a>

                              </div>
                         </div>
                    </div>
                    </div>
               </div>
          </div>
     </article>

<?php else: ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('tp-postbox mb-60')?>>

     <?php if(!empty($gallery)) : ?>
          <div class="tp-postbox-thumb mb-35 position-relative br-20">
               <div class="swiper tp-blog-active">
                    <div class="swiper-wrapper">

                    <?php if (is_array($gallery) && !empty($gallery)) : ?>
                         <?php foreach ($gallery as $item) : ?>
                              <div class="swiper-slide br-20">
                                   <img src="<?php echo esc_url($item['url']); ?>" alt="">
                              </div>
                         <?php endforeach; ?>
                    <?php else : ?>
                         <p>No items found in the gallery.</p>
                    <?php endif; ?>

                    </div>
               </div>

               <div class="tp-blog-slider-arrow">
                    <div class="tp-swiper-blog-button-prev tp-swiper-blog-button"><i class="flaticon-right-arrow"></i></div>
                    <div class="tp-swiper-blog-button-next tp-swiper-blog-button"><i class="flaticon-right-arrow"></i></div>
               </div>
          </div>
     <?php endif; ?>

     <div class="tp-postbox-content">

       <?php get_template_part('template-parts/blog/blog-meta'); ?>

            <h3 class="tp-postbox-title tp-fs-40 mb-30"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="tpblog__btn">
                     <a class="tp-text-btn" href="<?php the_permalink(); ?>"><?php echo esc_html__('Read More', 'exdos'); ?><i class="far fa-arrow-right"></i></a>
                </div>
    </div>
</article>

<?php endif; ?>