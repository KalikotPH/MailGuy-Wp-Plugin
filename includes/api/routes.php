<?php
	// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/** 
        * @package mailguy-wp-plugin
		* @version 0.1.0
		* This is the primary gateway of all the rest api request.
	*/

    // global 
    require plugin_dir_path(__FILE__) . '/v1/class-globals.php'; // Example
	
	// Init check if USocketNet successfully request from wapi.
    function mailguy_route()
    {
        // Example
        register_rest_route( 'mailguy/v1/user', 'mail', array(
            'methods' => 'POST',
            'callback' => array('MG_Send_Mail','listen'),
        ));     

    }
    add_action( 'rest_api_init', 'mailguy_route' );