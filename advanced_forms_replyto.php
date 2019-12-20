<?php
/*
Plugin Name: _ANDYP - Advanced Forms Pro - Add Reply-to Header
Plugin URI: https://londonparkour.com
Description: Emails from Advanced Forms Pro do not have the reply-to header by default.
Version: 1.0.0
Author: Andy Pearson
Author URI: https://londonparkour.com
*/

function filter_email_headers( $headers, $email, $form, $fields ) {

	$headers[] = 'Cc: andy@londonparkour.com';
    
    return $headers;
}

add_filter( 'af/form/email/headers', 'filter_email_headers', 10, 4 );