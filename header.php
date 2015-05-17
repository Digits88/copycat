<!DOCTYPE html>
<!--
Copyright 2015 Mike Newell
All rights reserved.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/futura-pt.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <style>
            
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script>
            (function() {
                $(window).load(function() {
                    function init() {
                        // format the images in the categories as background images
                        setProjectBoxHeights();
                    }
                    
                    function setProjectBoxHeights() {
                        $('.project-image img').each(function(idx) {
                            var w = $(this).width();
                            $(this).css({
                                height: w + 'px'
                            });
                        });
                    }
                    
                    init();
                    
                    $(window).on('resize', function(evt) {
                        setProjectBoxHeights();
                    });
                });
            })(jQuery);
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row spacer">
                <div class="col-md-12"></div>
            </div>
            <header class="row">
                <a href="/">
                    <h1 class="col-md-4">ERINN BUTULIS</h1>
                </a>
                
<?php
                $menu_name = 'header-menu';
                if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

                    $menu_items = wp_get_nav_menu_items($menu->term_id);

                    $menu_list = '<nav class="col-md-4 col-md-offset-4">';

                    foreach ( (array) $menu_items as $key => $menu_item ) {
                        $title = $menu_item->title;
                        $url = $menu_item->url;
                        $menu_list .= '<a href="' . $url . '">' . strtoupper($title) . '</a>';
                    }
                    $menu_list .= '</nav>';
                }
                echo $menu_list;
                
?>
                
<!--                <nav class="col-md-4 col-md-offset-4">
                    <a href="./about.html">ABOUT</a>
                    <a href="http://gf-blog.com/">BLOG</a>
                    <a href="./" class="selected">WORK</a>
                </nav>-->
            </header>
            <div class="row page-divider-row">
                <div class="col-md-12 page-divider"></div>
            </div>
            <section class="page">