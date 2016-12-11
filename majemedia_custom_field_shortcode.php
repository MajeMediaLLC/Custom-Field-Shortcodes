<?php

/*
Plugin Name: Custom Field Shortcodes
Plugin URI: https://www.majemedia.com/plugins/custom-field-shortcode
Description: Display content from a post's custom field
Version: 1.0
Author: Maje Media LLC
Author URI: https://www.majemedia.com
Copyright: 2016 Maje Media
Text Domain: majemedia-custom-field-shortcode
Domain Path: /lang
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/*
 *
 */

class majemedia_custom_field_shortcode {

	private static $instance;
	public         $plugin_url;
	public         $plugin_path;

	public static function get_instance() {

		if ( ! self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	public function __construct() {

		$this->set_class_vars();

		require_once 'autoload.php';

		$this::actions();
		$this::filters();
		$this::shortcodes();

	}

	public function set_class_vars() {

		$this->plugin_path = realpath( dirname( __FILE__ ) );
		$this->plugin_url  = plugins_url( '', __FILE__ );

	}

	public static function actions() {

	}

	public static function filters() {

	}

	public static function shortcodes() {

		add_shortcode( 'mmcfs', array(
			'MMCFS_Shortcode',
			'shortcode',
		) );

	}

}

$majemedia_custom_field_shortcode = majemedia_custom_field_shortcode::get_instance();