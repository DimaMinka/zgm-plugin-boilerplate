<?php
/**
 * @package  ZGM
 */
namespace ZGM\Admin;

use ZGM\Admin\Callbacks\AdminCallbacks;

class Admin
{

	private $plugin_name;

	private $version;

	public $callbacks;



	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) 
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->callbacks = new AdminCallbacks();

	}
	public function enqueue_styles() 
	{

		wp_enqueue_style( $this->plugin_name, PLUGIN_ROOT . 'dist/admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() 
	{
		
		wp_enqueue_script( $this->plugin_name, PLUGIN_ROOT . 'dist/admin.js', array( 'jquery' ), $this->version, true );

	}
	

}