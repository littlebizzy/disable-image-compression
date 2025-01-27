<?php
/*
Plugin Name: Disable Image Compression
Plugin URI: https://www.littlebizzy.com/plugins/disable-image-compression
Description: Disables all JPEG compression
Version: 2.0.2
Requires PHP: 7.0
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
GitHub Plugin URI: littlebizzy/disable-image-compression
Primary Branch: master
*/

// prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// disable wordpress.org updates for this plugin
add_filter( 'gu_override_dot_org', function( $overrides ) {
    $overrides[] = 'disable-image-compression/disable-image-compression.php';
    return $overrides;
}, 999 );

// Set JPEG compression to 100%
function disable_image_compression(int $quality): int {
    return 100;
}

// Apply compression settings on image upload and editing
add_filter('jpeg_quality', 'disable_image_compression', 999);
add_filter('wp_editor_set_quality', 'disable_image_compression', 999);

// Ref: ChatGPT
