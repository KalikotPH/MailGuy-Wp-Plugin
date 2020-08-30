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

		$tbl_mailings = MG_MAILINGS;
		
		$wpdb->query("START TRANSACTION");

		//Database table creation for dv_events
		if($wpdb->get_var( "SHOW TABLES LIKE '$tbl_mailings'" ) != $tbl_mailings) {
			$sql = "CREATE TABLE `".$tbl_mailings."` (";
				$sql .= "`ID` bigint(20) NOT NULL AUTO_INCREMENT, ";
				$sql .= "`hash_id` varchar(255) NOT NULL COMMENT 'hash id of transaction',";
				$sql .= "`recipient` varchar(255) NOT NULL COMMENT 'recipient  of mail', ";
				$sql .= "`subject` varchar(255) NOT NULL COMMENT 'subject of mail', ";
				$sql .= "`message` longtext NOT NULL COMMENT 'Message of mail', ";
				$sql .= "`date_created` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Date created ', ";
				$sql .= "PRIMARY KEY (`ID`) ";
				$sql .= ") ENGINE = InnoDB; ";
			$result = $wpdb->get_results($sql);
		}

		$wpdb->query("COMMIT");

	}
	add_action( 'activated_plugin', 'mg_dbhook_activate');