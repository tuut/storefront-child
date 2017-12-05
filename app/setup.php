<?php

namespace App;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'storefront-child/main.css',
        get_stylesheet_directory_uri() . '/dist/styles/main.css',
        false,
        null
    );

    wp_enqueue_script(
        'storefront-child/main.js#defer',
        get_stylesheet_directory_uri() . '/dist/scripts/main.js',
        [],
        null,
        true
    );
}, 100);


/**
 * Dequeue the Storefront Parent theme core CSS
 */
// add_action( 'wp_enqueue_scripts', function () {
//     wp_dequeue_style( 'storefront-style' );
//     wp_dequeue_style( 'storefront-woocommerce-style' );
// }, 999);
