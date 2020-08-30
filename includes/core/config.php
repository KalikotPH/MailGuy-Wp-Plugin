<?php
	// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	/**
	 * @package mailguy-wp-plugin
     * @version 0.1.0
     * This is where you provide all the constant config.
	*/
?>
<?php

	//Defining Global Variables
	define('MG_PREFIX', 'mg_');

	define('MG_MAILINGS', MG_PREFIX.'mailings');
	define('MG_MAILINGS_FILEDS', ' `recipient`, `subject`, `message`');



?>