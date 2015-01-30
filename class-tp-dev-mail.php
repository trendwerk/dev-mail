<?php
/**
 * Plugin Name: Development mails
 * Description: Redirect all mails on development and staging environments.
 *
 * Plugin URI: https://github.com/trendwerk/dev-mail
 * 
 * Author: Trendwerk
 * Author URI: https://github.com/trendwerk
 * 
 * Version: 1.0.1
 */

class TP_Dev_Mail {

	function __construct() {
		if( ! defined( 'WP_ENV' ) || 'development' == WP_ENV || 'staging' == WP_ENV )
			add_filter( 'wp_mail', array( $this, 'send_to' ) );
	}

	/**
	 * Don't send e-mails in development and staging environments
	 */
	function send_to( $mail ) {
		$mail['subject'] .= ' [' . $mail['to'] . ']';

		if( 'staging' == WP_ENV )
			$mail['to'] = get_option( 'admin_email' );
		else if( defined( 'TP_DEV_MAIL' ) )
			$mail['to'] = TP_DEV_MAIL;
		else
			$mail['to'] = '';

		return $mail;
	}
	
} new TP_Dev_Mail;
