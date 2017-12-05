<?php

/**
 * Ensure dependencies are loaded
 */
if (!file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die('Composer dependencies could not be found');
}
require_once $composer;

/** Initializes the WPS (whoops error handling) instance */
if (WP_DEBUG_DISPLAY) {
    (new Rarst\wps\Plugin())->run();
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) {
    $file = "app/{$file}.php";
    if (!locate_template($file, true, true)) {
        wp_die(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin', 'clean-up']);
