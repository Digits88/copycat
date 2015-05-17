<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function init() {
    add_supports();
    register_menus();
}

function register_menus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

function add_supports() {
    add_theme_support( 'post-thumbnails' ); 
}

add_action( 'init', 'init' );
