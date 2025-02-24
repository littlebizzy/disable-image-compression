<?php
/*
Plugin Name: Disable Image Compression
Plugin URI: https://www.littlebizzy.com/plugins/disable-image-compression
Description: Disables all JPEG compression
Version: 2.0.3
Requires PHP: 7.0
Tested up to: 6.7
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Update URI: false
GitHub Plugin URI: littlebizzy/disable-image-compression
Primary Branch: master
Text Domain: disable-image-compression
*/

// prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// override wordpress.org with git updater
add_filter( 'gu_override_dot_org', function( $overrides ) {
    $overrides[] = 'disable-image-compression/disable-image-compression.php';
    return $overrides;
}, 999 );

// set jpeg compression to 100%
function disable_image_compression( $quality ): int {
    return 100;
}

// apply compression settings on image upload and editing
add_filter( 'jpeg_quality', 'disable_image_compression', 999 );
add_filter( 'wp_editor_set_quality', 'disable_image_compression', 999 );

// Ref: ChatGPT
