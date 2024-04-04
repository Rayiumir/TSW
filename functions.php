<?php

// Calling Files

require_once('inc/enqueue.php');
require_once('inc/post_type.php');
require_once('inc/metabox.php');
require_once('navbar.php');

// Menus

register_nav_menu('main-one', 'منوی اول');
register_nav_menu('main-two', 'منوی دوم');

function woocommerce_supports(){
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'woocommerce_supports');