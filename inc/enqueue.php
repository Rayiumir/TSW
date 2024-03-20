<?php

defined('ABSPATH') || exit;

define('RAYIUM_URL', get_template_directory_uri());
define('RAYIUM_STYLE', get_stylesheet_uri());

define('RAYIUM_SHOP_CSS', RAYIUM_URL . '/css/');
define('RAYIUM_SHOP_IMG', RAYIUM_URL . '/img/');
define('RAYIUM_SHOP_JS', RAYIUM_URL . '/js/');

define('RAYIUM_SHOP_VERSION', '1.0.0');

define('RAYIUM_SHOP_ASSET_VERSION', defined('WP_DEBUG') && WP_DEBUG ? time() : RAYIUM_SHOP_VERSION);

function rayium_styles() {
    
    wp_enqueue_style(
        'bootstrap-css',
        RAYIUM_SHOP_CSS . 'bootstrap.rtl.min.css',
        '5.3.2'
    );

    wp_enqueue_style(
        'all-css',
        RAYIUM_SHOP_CSS . 'all.min.css',
        '6.5.0'
    );

    wp_enqueue_style(
        'style-css',
        RAYIUM_STYLE,
        RAYIUM_SHOP_ASSET_VERSION
    );
}
add_action('wp_head', 'rayium_styles', 1);

function rayium_scripts() {
    
    $js_deps = ['jquery'];

    wp_enqueue_script(
        'main_js',
        RAYIUM_SHOP_JS . 'main.js',
        $js_deps,
        RAYIUM_SHOP_ASSET_VERSION
    );

    wp_enqueue_script(
        'bootstrap_js',
        RAYIUM_SHOP_JS . 'bootstrap.bundle.min.js',
        '5.3.3'
    );
    
}
add_action('wp_footer', 'rayium_scripts');