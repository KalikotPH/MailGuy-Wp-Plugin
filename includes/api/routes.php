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
?>

<?php

    //Require the USocketNet class which have the core function of this plguin. 

   

    // global 
    require plugin_dir_path(__FILE__) . '/v1/class-globals.php'; // Example

	
	// Init check if USocketNet successfully request from wapi.
    function mailguy_route()
    {
        // Example
            register_rest_route( 'coinpress/v1/user', 'auth', array(
                'methods' => 'POST',
                'callback' => array('MG_Authenticate','listen'),
            ));     
    

    }
    add_action( 'rest_api_init', 'mailguy_route' );

?>