<?php
/*
Plugin Name: WP Example
Description: Do not install this plugin !
Version: 0.0.0
Author: ChelseaStats
*/
if ( ! class_exists( 'className' ) ) {
	class className {
		function __construct() {
			add_action( 'admin_init', array( $this, 'methodName' ) );
		}
		function methodName() {
			global $wpdb; // access db

			exit();
		}
	}
	new className;
}
