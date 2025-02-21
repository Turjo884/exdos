<?php

remove_action('woocommerce_before_main_content','woocommerce_breadcrumb', 20);
remove_action('woocommerce_shop_loop_header','woocommerce_product_taxonomy_archive_header', 10);
remove_action('woocommerce_before_shop_loop','woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop','woocommerce_catalog_ordering', 30);
remove_action('woocommerce_sidebar','woocommerce_get_sidebar', 10);

// product item
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);


// wp wishtlist default button hide start
add_filter( 'woosc_button_position_archive', '__return_false' );
add_filter( 'woosc_button_position_single', '__return_false' );
// wp wishlist default button hide end

// wp qucik view button hide start
add_filter( 'woosq_button_position', '__return_false' );
// wp qucik view button hide end

// wp wishlist button hide start 
add_filter( 'woosw_button_position_archive', '__return_false' );
add_filter( 'woosw_button_position_single', '__return_false' );
// wp wishtlist button hide end



// product add to cart button
function exdos_wooc_add_to_cart( $args = array() ) {
    global $product;

        if ( $product ) {
            $defaults = array(
                'quantity'   => 1,
                'class'      => implode(
                    ' ',
                    array_filter(
                        array(
                            'tp-product-add-cart-btn-large text-center',
                            'product_type_' . $product->get_type(),
                            $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                            $product->supports( 'ajax_add_to_cart' ) && $product->is_purchasable() && $product->is_in_stock() ? 'ajax_add_to_cart' : '',
                        )
                    )
                ),
                'attributes' => array(
                    'data-product_id'  => $product->get_id(),
                    'data-product_sku' => $product->get_sku(),
                    'aria-label'       => $product->add_to_cart_description(),
                    'rel'              => 'nofollow',
                ),
            );

            $args = wp_parse_args( $args, $defaults );

            if ( isset( $args['attributes']['aria-label'] ) ) {
                $args['attributes']['aria-label'] = wp_strip_all_tags( $args['attributes']['aria-label'] );
            }
        }


         // check product type 
         if( $product->is_type( 'simple' ) ){
            $btntext = esc_html__("Add to Cart",'harry');
         } elseif( $product->is_type( 'variable' ) ){
            $btntext = esc_html__("Select Options",'harry');
         } elseif( $product->is_type( 'external' ) ){
            $btntext = esc_html__("Buy Now",'harry');
         } elseif( $product->is_type( 'grouped' ) ){
            $btntext = esc_html__("View Products",'harry');
         }
         else{
            $btntext = esc_html__("Add to Cart",'harry');
         } 

        echo sprintf( '<a title="%s" href="%s" data-quantity="%s" class="%s" %s>%s</a>',
            $btntext,
            esc_url( $product->add_to_cart_url() ),
            esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
            esc_attr( isset( $args['class'] ) ? $args['class'] : 'tp-product-add-cart-btn-large button' ),
            isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
            $btntext
        );
}



function exdos_funtion_grid(){ 
      
    $pro_cats = get_the_terms( get_the_ID(), 'product_cat' );
    
    ?>

    <div class="tp-product-item mb-50">
        <div class="tp-product-thumb mb-15 fix p-relative z-index-1">
            <a href="<?php the_permalink(); ?>">
                <!-- Product Image Start -->
                 <?php the_post_thumbnail();?>
                <!-- Product Image End -->
            </a>

            <div class="tp-product-badge">
                <?php woocommerce_show_product_loop_sale_flash(); ?>
            </div>

            <!-- product action -->
            <div class="tp-product-action tp-product-action-blackStyle">
                <div class="tp-product-action-item d-flex flex-column">


                    <!-- Start Compacre  -->
                     <div class="tp-product-action-btn tp-product-add-cart-btn">

                     <?php echo do_shortcode('[woosc]'); ?>
                     <span class="tp-product-tooltip">Add To Compare</span>
                     </div>
                    <!-- End Compare -->



                    <!-- Start Quick View -->
                     <div class="tp-product-action-btn tp-product-quick-view-btn">

                        <?php echo do_shortcode('[woosq]');?>
                        <span class="tp-product-tooltip">Quick View</span>
                     </div>
                    <!-- End Quick View -->

                
                    <!-- Start Add To Wishtist -->
                     <div class="tp-product-action-btn tp-product-add-to-wishlist-btn">

                     <?php echo do_shortcode('[woosw]');?>
                     <span class="tp-product-tooltip">Add To Wishlist</span>
                     </div>
                    <!-- End Add To Wishtlist -->

                </div>
            </div>

            <div class="tp-product-add-cart-btn-large-wrapper">
                <?php exdos_wooc_add_to_cart(); ?>
            </div>
        </div>
        <div class="tp-product-content">
            <div class="tp-product-tag">


            <?php 
                $html = '';
                foreach($pro_cats as $key => $cat) {

                $html .= '<span><a href="'.get_category_link($cat->term_id).'">'.$cat->name.'</a></span>,';

                }
                echo rtrim($html,','); 
            ?>

                
            </div>
            <h3 class="tp-product-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div class="tp-product-price-wrapper">
                <?php woocommerce_template_loop_price(); ?>
               
            </div>
        </div>
    </div>

<?php
}


add_action('woocommerce_before_shop_loop_item','exdos_funtion_grid');