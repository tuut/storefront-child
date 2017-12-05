<?php

namespace App;

/**
 * Set JPEG upload quality back to 100
 */
add_filter('jpeg_quality', function () {
    return 100;
});

/**
 * Allows the upload of SVG files
 */
add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});

/**
 * Produces cleaner filenames for uploads
 * Reference: wpartisan.me/tutorials/rename-clean-wordpress-media-filenames
 *
 * @param  string $filename
 * @return string
 */
add_filter('sanitize_file_name', function ($filename) {
    // Converts to ASCII
    $sanitized_filename = remove_accents($filename);
    // Removes all non-alphanumeric except .
    $sanitized_filename = preg_replace('/[^A-Za-z0-9-\. ]/', '', $sanitized_filename);
     // Removes all but last .
    $sanitized_filename = preg_replace('/\.(?=.*\.)/', '', $sanitized_filename);
    // Replaces any more than one - in a row
    $sanitized_filename = preg_replace('/-+/', '-', $sanitized_filename);
    // Removes last - if at the end
    $sanitized_filename = str_replace('-.', '.', $sanitized_filename);
    // Transforms to lowercase
    $sanitized_filename = strtolower($sanitized_filename);
    return $sanitized_filename;
}, 10, 1);

/**
 * Defer enqueued scripts which has '#defer' on their name
 */
add_filter('script_loader_tag', function ($tag, $handle) {
    if (strpos($handle, '#defer') !== false) {
        return str_replace('src', 'defer="defer" src', $tag);
    }
    return $tag;
}, 10, 2);

/**
 * Wraps oembeds with 'embed'
 */
add_filter('embed_oembed_html', function ($cache) {
    return "<div class=\"oembed-container\">{$cache}</div>";
});

/**
 * Remove the protocol (http(s)) from asset's url
 *
 * Based on 'https://github.com/ryanjbonnell/Protocol-Relative-Theme-Assets'
 * by Ryan J. Bonnell
 */
$filter__url_protocol = function ($url) {
    return preg_replace('(https?://)', '//', $url);
};
add_filter('style_loader_src', $filter__url_protocol, 10, 2);
add_filter('script_loader_src', $filter__url_protocol, 10, 2);
add_filter('template_directory_uri', $filter__url_protocol, 10, 3);
add_filter('stylesheet_directory_uri', $filter__url_protocol, 10, 3);
