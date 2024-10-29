<?php
/*
Plugin Name: b Laser Loader
Description: This plugin Add a beautiful Laser Loading like Youtube and medium.com
Plugin URI: https://bPlugins.com
Version: 1.5.1
Author: bPlugins
Author URI: https://bplugins.com
License: GPLv2
*/

if(!class_exists('BLaser_BLager')){
class BLager_BLager{
	public function __construct(){
		add_action('wp_enqueue_scripts', [$this, 'blaser_assets']);
		add_action('plugins_loaded', [$this, 'plugins_loaded']);
		add_action('wp_footer', [$this, 'laser_html_in_footer']);
	}

	/**
	 * frontend assets 
	 */
	function blaser_assets() {
		wp_enqueue_style( 'wpll-style', plugins_url( '/laser.css', __FILE__ ) );
		wp_enqueue_script('wpll-script', plugins_url( '/dist/public.js', __FILE__ ),  array('jquery'), null, false);

		wp_localize_script('wpll-script', 'wpllSettings', array(
			'settings' => $this->get_setting('_wpll'),
		));
	}

	/**
	 * Plugin loaded
	 */
	public function plugins_loaded(){
		require_once "admin/framework/codestar-framework.php";
		require_once "admin/metabox-free.php";
	}

	/**
	 * get metabox value
	 */
	public function get_setting($key, $default = null){
		$value = get_option( $key);
		if($value !== ''){
			return $value;
		}
		return $default;
	}

	/**
	 * add laser html in footer
	 */
	public function laser_html_in_footer(){
		echo "<div id=\"progress\"><dt></dt><dd></dd></div>";
	}
}
new BLager_BLager();
}


?>