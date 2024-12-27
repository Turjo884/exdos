<form class="tp-blog-form position-relative" action="/" method="get">
    <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr__('Search Keywords', 'exdos')?>">
    <button type="submit"><i class="far fa-arrow-right"></i></button>
</form>