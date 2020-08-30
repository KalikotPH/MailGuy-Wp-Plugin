<?php
	// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * @package mailguy-wp-plugin
     * @version 0.1.0
     * Here is where you add hook to WP to create our custom database if not found.
	*/


	function mg_dbhook_activate(){
				
		//Initializing wordpress global variable
		global $wpdb;


		



	}
	add_action( 'activated_plugin', 'mg_dbhook_activate');