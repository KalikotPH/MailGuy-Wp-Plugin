<?php
    /*
        Plugin Name: MailGuy Wp Plugin
        Plugin URI: http://www.bytescrafter.net/projects/mailguy
        Description: Email templates and sending automation with WordPress.
        Version: 0.2.1
        Author: Bytes Crafter
        Author URI:   https://www.bytescrafter.net/about-us
        Text Domain:  mailguy-wp-plugin

        * @package      mailguy-wp-plugin
        * @author       Bytes Crafter

        * @wordpress-plugin
        * WC requires at least: 2.5.0
        * WC tested up to: 5.7.0
    */

    #region WP Recommendation - Prevent direct initilization of the plugin.
    if ( !defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly
    
    if ( ! function_exists( 'is_plugin_active' ) ) 
    {
        require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    }
    #endregion

    $plugin_data = get_plugin_data( __FILE__ );
    define("MG_PLUGIN_VER", $plugin_data['Version'] );

    define("MG_PLUGIN_PATH", plugin_dir_path( __FILE__ ) );
    define("MG_PLUGIN_URL", plugin_dir_url( __FILE__ ) );

    define("MG_PLUGIN_LIB", MG_PLUGIN_PATH . '/includes/libraries' );

    // //Important config files and plugin updates.
    include_once ( MG_PLUGIN_PATH . '/includes/core/config.php' );

    //Make sure to create required mysql tables.
    include_once ( MG_PLUGIN_PATH. '/includes/core/dbhook.php' );

    //Include the REST API of USocketNet to be accessible.
    include_once ( MG_PLUGIN_PATH. '/includes/api/routes.php' );

    // Main php file
    include_once ( MG_PLUGIN_PATH. '/includes/libraries/gmail-smtp.php' );
    include_once ( MG_PLUGIN_PATH . '/includes/core/main.php' );