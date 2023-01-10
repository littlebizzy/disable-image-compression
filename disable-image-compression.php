<?php
/*
Plugin Name: Disable Image Compression
Plugin URI: https://www.littlebizzy.com/plugins/disable-image-compression
Description: Completely disables all JPEG compression in WordPress including image uploads, thumbnails, and image editing tools, thus retaining original quality.
Version: 1.0.2
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/


/**
 * Define main plugin class
 */
class LB_Disable_Image_Compression {

	/**
	 * A reference to an instance of this class.
	 *
	 * @since 1.0.0
	 * @var   object
	 */
	private static $instance = null;

	/**
	 * Initalize plugin actions
	 *
	 * @return void
	 */
	public function init() {

		// Disable compression on upload
		add_filter( 'jpeg_quality', array( $this, 'set_compression' ), 999 );
		// Disable compression whe editing uploaded image
		add_filter( 'wp_editor_set_quality', array( $this, 'set_compression' ), 999 );
	}

	/**
	 * Returns plugin base file
	 * @return [type] [description]
	 */
	public static function file() {
		return __FILE__;
	}

	/**
	 * Set new compression value.
	 *
	 * @param  int $compression Default compression value.
	 * @return int
	 */
	public function set_compression( $compression ) {
		return 100;
	}

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @return object
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}
}

/**
 * Returns instance of LB_Disable_Image_Compression class
 *
 * @return object
 */
function lb_disable_image_compression() {
	return LB_Disable_Image_Compression::get_instance();
}

// Initalize plugin on 'init' hook (plugin nothing to do earlier)
add_action( 'init', array( lb_disable_image_compression(), 'init' ) );
