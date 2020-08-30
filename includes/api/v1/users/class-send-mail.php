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


    class MG_Send_Mail{
        
        public static function listen(){
            

            $to = 'miguel1.radaza@gmail.com';
            $subject = 'Account Activation';
            $message = 'Check this link to activate account : sample link';


           return wp_mail($to, $subject, $message);

        }
        
    }