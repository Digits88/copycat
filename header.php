<!DOCTYPE html>
<!--
Copyright 2015 Mike Newell
All rights reserved.

Based on a theme here: http://avenue-demo.squarespace.com/#/alps-avenue/
-->
<html>
    <head>
        <title><?php echo get_bloginfo('name'); ?></title>
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
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-64119704-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row spacer">
                <div class="col-md-12"></div>
            </div>
            <header class="row">
                <a href="/">
                    <h1 class="col-md-4"><?php echo strtoupper(get_bloginfo('name')); ?></h1>
                </a>
                
<?php
                $menu_name = 'header-menu';
                if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

                    $menu_items = wp_get_nav_menu_items($menu->term_id);

                    $menu_list = '<nav class="col-md-4 col-md-offset-4">';
                    
                    $current_uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

                    foreach ( (array) $menu_items as $key => $menu_item ) {
                        $title = $menu_item->title;
                        $url = $menu_item->url;
                        $selected = '';
                        
                        if($current_uri == $url) {
                            $selected .= 'class="selected"';
                        }
                        
                        $menu_list .= '<a href="' . $url . '" ' . $selected . ' >' . strtoupper($title) . '</a>';
                    }
                    $menu_list .= '</nav>';
                }
                echo $menu_list;
                
?>
            </header>
            <div class="row page-divider-row">
                <div class="col-md-12 page-divider"></div>
            </div>
            <section class="page">