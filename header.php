<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exdos - Creative Agency HTML Template </title>

    <!-- Don't Need That WordPress Will Do it by himself -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo/favicon.png">

    <?php wp_head();?>
</head>
<body>
    
    <!-- scroll to top  -->
    <button id="back-to-top"><i class="far fa-arrow-up"></i></button>

    <!-- preloader  -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>


    <?php echo get_template_part('template-parts/header/header-1'); ?>
    <?php exdos_breadcrumb();?>

        </body>
</html>
