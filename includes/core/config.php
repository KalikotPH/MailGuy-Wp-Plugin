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

	define('MG_CONFIGS', MG_PREFIX.'configs');

	define('MG_CURRENCIES', MG_PREFIX.'currencies');
	define('MG_CURRENCIES_FIELDS', '(`title`, `info`, `abbrev`, `exchange`, `created_by`)');


	define('MG_REVS', MG_PREFIX.'revisions');
	
	define('MG_WALLETS', MG_PREFIX.'wallets');
	define('MG_WALLETS_FIELDS', '( `wpid`, `currency`, `curhash`, `public_key`, `date_created` )');


	define('MG_TRANSACTION', MG_PREFIX.'transaction');
	define('MG_TRANSACTION_FIELDS', '(`sender`, `recipient`, `amount`, `prevhash`, `curhash`, `date_created` )');


?>