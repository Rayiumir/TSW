<?php

// Slider

function Slider() {
    register_post_type('slider',
        array(
            'labels' => array(
                'name' => 'اسلایدر',
                'singular_name' => 'اسلایدرها'
            ),

            'public' => true,
            'rewrite' => array('slug' => 'slider'),
            'menu_icon' => 'dashicons-slides',
            'supports' => array('title', 'thumbnail')
        )
    );
}
add_action('init', 'Slider');

// Slider Ads

function SliderAds() {
    register_post_type('sliderads',
        array(
            'labels' => array(
                'name' => 'تبلیغات اسلایدر',
                'singular_name' => 'تبلیغات اسلایدرها'
            ),

            'public' => true,
            'rewrite' => array('slug' => 'sliderads'),
            'menu_icon' => 'dashicons-megaphone',
            'supports' => array('title', 'thumbnail')
        )
    );
}
add_action('init', 'SliderAds');

// Supports

function Supports() {
    register_post_type('supports',
        array(
            'labels' => array(
                'name' => 'پشتیبانی',
                'singular_name' => 'پشتیبانی ها'
            ),

            'public' => true,
            'rewrite' => array('slug' => 'supports'),
            'menu_icon' => 'dashicons-plus-alt2',
            'supports' => array('title', 'thumbnail')
        )
    );
}
add_action('init', 'Supports');

// Prosuct Ads

function Adss() {
    register_post_type('adss',
        array(
            'labels' => array(
                'name' => 'تبلیغات',
                'singular_name' => 'تبلیغات ها'
            ),

            'public' => true,
            'rewrite' => array('slug' => 'adss'),
            'menu_icon' => 'dashicons-megaphone',
            'supports' => array('title', 'thumbnail')
        )
    );
}
add_action('init', 'Adss');